<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->isAdmin())
            return Redirect::to('admin');
        if (Auth::user()->isInvestor())   
           return Redirect::to('investor');
        if (Auth::user()->isCompany())   
           return Redirect::to('company');
        
        
        
    }
    
    
}
