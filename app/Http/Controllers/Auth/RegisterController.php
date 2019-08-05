<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\Investor;
use Illuminate\Http\Request;
use Redirect;
use Session;
use Mail;
use Db;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'active' => 1,
            'user_type_id' => $data['user_type_id'],
            'password' => bcrypt($data['password']),
        ]);
         
    }
    
    
    private function validateToken(Request $request)
    {
        if (session('_token') == $request->get('_token'))
            return true;
        return false;
    }
    
    public function activate($email, $token)
    {
        $user = User::where('email', $email)->first();
        if ($user->remember_token == $token){
            $user->active = 1;
            $user->save();
            return Redirect::to('/login-investor')->with('register', 'ok');
        }
        return abort('405');
            
    }
    
    public function investorRegister(Request $request)
    {
         
        if ($this->validateToken($request))
        {
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'company' => 'required',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);
            $data = $request->all();
            $data['user_type_id'] = 3;
            

            $user = $this->create($data);

            $investor = new Investor();
            $investor->company = $request->get('company');
            $investor->places = $request->get('places');
            $investor->sectors = $request->get('sectors');
            $investor->country_id = $request->get('country');
            $investor->city = $request->get('city');
            $investor->user_id = $user->id;
            $investor->save();

            $user->investor_id = $investor->id;
            $user->remember_token = Session::get('_token');
            $user->save();
            /*$link = 'https://www.magyates.com/activateAccount/'.$request->get('email').'/'.Session::get('_token');
            
            $send = Mail::send(['html' => 'emails.welcome'], [ 'name' => $request->get('name'), 'last_name' => $request->get('last_name'), 'link' => $link ], function($message) use ($request) 
                {
                      $message->from( 'info@magyates.com', 'Magyates' );
                      $message->to($request->get('email'), $request->get('name').' '.$request->get('last_name'))->subject('Welcome to Magyates.com');


                });
            */
            if ($request->get('company_link') && $request->get('video_link'))
                return Redirect::to('/company/'.$request->get('company_link').'/'.$request->get('video_link').'/'.$request->get('email'));
            else
                return Redirect::to('/login-investor')->with('register','ok');
        }
        return Redirect::to('/register-investor');
        
    }
}
