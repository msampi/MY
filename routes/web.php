<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/are-you-a-institutional-investor', 'WebController@investor');
Route::get('/reject-login', 'WebController@reject');
Route::get('/login-investor', 'WebController@loginInvestor');
Route::get('/register-investor', 'WebController@registerInvestor');
Route::post('contact', 'WebController@contact');
Route::post('/investor-register', 'Auth\RegisterController@investorRegister');
Route::get('/activateAccount/{email}/{token}', 'Auth\RegisterController@activate');
Route::get('/rejectAccount/{email}/{token}', 'Auth\RegisterController@reject');
Route::get('company/{company_name}/{video_name}/{email}', 'CompanyController@showVideoToInvestor');
Route::post('company/contact', 'CompanyController@contactCompany');


Route::get('/', function () {
    return view('web.index');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


/* ADMIN */

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function()
{
    Route::get('/', 'AdminController@index');
    Route::get('live', 'AdminController@liveStream');
    Route::resource('companies', 'CompanyController');
    Route::resource('videos', 'VideoController');
    Route::resource('investors', 'InvestorController');
    Route::resource('settings', 'SettingController');
    Route::get('{name}', 'CompanyController@showByName');
    Route::get('{name}/{video_name}', 'CompanyController@showVideo');


});

/* INVESTOR */


Route::group(['middleware' => 'investor', 'prefix' => 'investor'], function()
{
    Route::get('/', 'InvestorViewController@index');
    Route::get('/company/{id}', 'InvestorViewController@index');
    Route::get('live', 'InvestorViewController@liveStream');
    Route::get('{name}', 'CompanyController@showByName');
    Route::get('{name}/{video_name}', 'CompanyController@showVideo');


});

/* COMPANY */


Route::group(['middleware' => 'company', 'prefix' => 'company'], function()
{
    Route::get('/', 'CompanyViewController@index');
    Route::get('{name}', 'CompanyController@showByName');
    Route::get('{name}/{video_name}', 'CompanyController@showVideo');
});

Route::get('/logout', 'Auth\LoginController@logout');



