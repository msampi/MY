<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Models\Country;
use App\Models\Sector;
use App\Models\Place;
use Redirect;
use Validator;

class WebController extends Controller
{

    private function validateToken(Request $request)
    {
        if (session('_token') == $request->get('_token'))
            return true;
        return false;
    }

    public function contact(Request $request)
    {
        if ($this->validateToken($request)) {


            $send = Mail::send(['html' => 'emails.message'], [ 'msg' => $request->get('message'), 'name' => $request->get('name'), 'email' => $request->get('email'), 'link' => '' ], function($message) use ($request)
                {
                      $message->from( 'noreply@magyates.com', 'Magyates' );
                      $message->to('thomas.samuelson@icloud.com', 'Thomas Samuelson')->subject('New message from contact form');

                });
            return Redirect::to('/#contact')->with('message','ok');
        }
    }

    public function investor()
    {
        return view('web.institutional');
    }

    public function reject()
    {
        return view('web.reject');
    }

    public function loginInvestor()
    {
        return view('web.loginInvestor');
    }

    public function registerInvestor()
    {
        return view('web.registerInvestor')->with('countries', Country::pluck('name','id'))
                                           ->with('sectors', Sector::pluck('name','id'))
                                           ->with('places', Place::pluck('name','id'));
    }
}
