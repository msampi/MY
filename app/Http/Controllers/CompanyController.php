<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Repositories\CompanyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Country;
use App\Models\Company;
use App\Models\Video;
use App\User;
use Response;
use Redirect;
use Mail;

class CompanyController extends AppBaseController
{
    /** @var  CompanyRepository */
    private $companyRepository;

    public function __construct(CompanyRepository $companyRepo)
    {
        $this->companyRepository = $companyRepo;
    }

    /**
     * Display a listing of the Company.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->companyRepository->pushCriteria(new RequestCriteria($request));
        $companies = $this->companyRepository->all();

        return view('companies.index')
            ->with('companies', $companies);
    }

    public function contactCompany(Request $request){
        
        $company = Company::find($request->get('company_id'));
        $company_email = $company->user->email;
        $send = Mail::send(['html' => 'emails.message'], 
                           [ 'msg' => $request->get('message'), 
                             'name' => $request->get('name'), 
                             'email' => $request->get('email'), 
                             'title' => 'Investor Question',
                             'link' => '' ], function($message) use ($request, $company_email) 
            {
                $message->from( 'info@magyates.com', 'Magyates' );
                $message->to($company_email, 'Matias Sampietro')->subject('You have a new message from Magyates website');

            });   
    }

    /**
     * Show the form for creating a new Company.
     *
     * @return Response
     */
    public function create()
    {
        
        return view('companies.create')->with('countries', Country::pluck('name','id'));
        
    }

    /**
     * Store a newly created Company in storage.
     *
     * @param CreateCompanyRequest $request
     *
     * @return Response
     */
    public function store(CreateCompanyRequest $request)
    {
        $input = $request->all();
        
        $this->validate($request, [
            'name' => 'required|unique:companies',
            'email' => 'required|unique:users',
            'contact_name' => 'required'
        ]);
        
        $input['image'] = $this->uploadFile($request,'image');
        $input['photo_bg'] = $this->uploadFile($request,'photo_bg');
        
        $company = $this->companyRepository->create($input);

        Flash::success('Company saved successfully.');

        return redirect(route('companies.index'));
    }

    /**
     * Display the specified Company.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $company = $this->companyRepository->findWithoutFail($id);

        if (empty($company)) {
            Flash::error('Company not found');

            return redirect(route('companies.index'));
        }

        return view('companies.show')->with('company', $company);
    }
    
    public function decodeSlug($slug){
        return str_replace('-',' ',$slug);
    }
    
    public function showByName($name)
    {
         
        $company = $this->companyRepository->findWhere(['name' => $this->decodeSlug($name)])->first();

        if (empty($company)) {
            abort('404');
        }

        return view('companies.show')->with('company', $company);
    }
    
    public function showVideo($name, $video_name)
    {
         
        $company = $this->companyRepository->findWhere(['name' => $this->decodeSlug($name)])->first();
        $video = $company->getVideo($video_name);
        
        if (empty($company) || empty($video)) {
            abort('404');
        }
    

        return view('companies.showVideo')->with('company', $company)
                                          ->with('video', $video)
                                          ->with('question', true);
    }
    
    public function showVideoToInvestor($company_name, $video_name, $investor_email)
    {
       
        $user = User::where('email',$investor_email)->first();
        $vname = str_replace('-',' ',$video_name);
        $video = Video::where('name',$vname)->first();
        
        if ($video->type == 1) // Private video
            if (!$user)
                return Redirect::to('/register-investor')->with('company',$company_name)
                                                     ->with('video',$video_name)
                                                     ->with('email',$investor_email);
        
    
        
        return $this->showVideo($company_name, $video_name);
        
    }

    /**
     * Show the form for editing the specified Company.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $company = $this->companyRepository->findWithoutFail($id);

        if (empty($company)) {
            Flash::error('Company not found');
            return redirect(route('companies.index'));
        }

        return view('companies.edit')->with('company', $company)->with('countries', Country::pluck('name','id'));
    }

    /**
     * Update the specified Company in storage.
     *
     * @param  int              $id
     * @param UpdateCompanyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCompanyRequest $request)
    {
        $company = $this->companyRepository->findWithoutFail($id);

        if (empty($company)) {
            Flash::error('Company not found');
            return redirect(route('companies.index'));
        }
        
        $this->validate($request, [
            'name' => 'required|unique:companies,name,'.$company->id,
            'email' => 'required|unique:users,email,'.$company->user_id,
            'contact_name' => 'required'
        ]);
        $input = $request->all();
    
        $input['image'] = $this->uploadFile($request,'image');
        $input['photo_bg'] = $this->uploadFile($request,'photo_bg');
        
        $company = $this->companyRepository->update($input, $id);

        Flash::success('Company updated successfully.');

        return redirect(route('companies.index'));
    }

    /**
     * Remove the specified Company from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $company = $this->companyRepository->findWithoutFail($id);

        if (empty($company)) {
            Flash::error('Company not found');

            return redirect(route('companies.index'));
        }

        $this->companyRepository->delete($id);

        Flash::success('Company deleted successfully.');

        return redirect(route('companies.index'));
    }
}
