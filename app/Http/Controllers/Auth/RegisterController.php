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
        //$this->middleware('guest');
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
            'active' => 0,
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

    private function sendWelcomeMessage($user) {
        $send = Mail::send(['html' => 'emails.welcome'], [ 'name' => $user->name, 'last_name' => $user->last_name ], function($message) use ($user)
        {
            $message->from( 'admin@magyates.com', 'Magyates' );
            $message->to($user->email, $user->name.' '.$user->password)->subject('Welcome to Magyates.com');
        });
    }

    public function activate($email, $token)
    {
        $user = User::where('email', $email)->first();
        if ($user) {
            if ($user->remember_token == $token) {
                $user->active = 1;
                $user->save();
                $this->sendWelcomeMessage($user);
                echo 'The investor has been activated succesfully. An email has sent to him';
            } else
                echo 'Invalid token';
        }
        else
            echo 'Investor does not exist';

    }

    public function reject($email, $token)
    {
        $user = User::where('email', $email)->first();
        if ($user) {
            if ($user->remember_token == $token){
                $user->delete();
                echo 'The investor has been completly removed from the database';
            }
            else
                echo 'Invalid token';
        }
        else
            echo 'Investor does not exist';
    }

    public function investorRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|recaptcha',
        ]);

        if (!$validator->fails() && $this->validateToken($request))
        //if ($this->validateToken($request))
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
            $activateLink = 'https://www.magyates.com/activateAccount/'.$request->get('email').'/'.Session::get('_token');
            $rejectLink = 'https://www.magyates.com/rejectAccount/'.$request->get('email').'/'.Session::get('_token');

            $send = Mail::send(['html' => 'emails.aceptation'], [ 'name' => $request->get('name'), 'last_name' => $request->get('last_name'), 'email' => $request->get('email'), 'activateLink' => $activateLink, 'rejectLink' => $rejectLink ], function($message) use ($request)
                {
                      $message->from( 'admin@magyates.com', 'Magyates' );
                      $message->to('thomas.samuelson@icloud.com', $request->get('name').' '.$request->get('last_name'))->subject('New investor registration Magyates.com');

                });

            if ($request->get('company_link') && $request->get('video_link'))
                return Redirect::to('/company/'.$request->get('company_link').'/'.$request->get('video_link').'/'.$request->get('email'));
            else
                return Redirect::to('/login-investor')->with('register','ok');
        }
        return Redirect::to('/register-investor');

    }
}
