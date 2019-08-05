<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\VideoRepository;
use App\Models\Continent;
use App\Models\Company;
use Auth;

class InvestorViewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    
     */
    
    private $videoRepository;
    
    
    public function __construct(VideoRepository $videoRepo)
    {
        $this->middleware('auth');
        $this->videoRepository = $videoRepo;
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = NULL)
    {
        if (!$id)
            $companies = Company::all();
        else
            $companies = Company::where('country_id',$id)->get();
        
        $continents = Continent::where('interest','!=', 0)->get();
        return view('investorView.home')->with('continents',$continents)
                                        ->with('companies',$companies);
        
    }
    
    
}
