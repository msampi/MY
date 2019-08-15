<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CompanyViewController extends Controller
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
        $company = Auth::user()->company;
        

        if (empty($company)) {
            abort('404');
        }

        return view('companies.show')->with('company', $company);
        
        
    }
    
    
}
