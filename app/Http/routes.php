<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function(){
    if(Auth::guest()){
        return Redirect::to('auth/login');
    } else {
        return view('home');
        /*echo 'Welcome home' . Auth::user()->email .'.';*/
    }
});

Route::get('user', function(){
    if(Auth::guest()){
        return Redirect::to('auth/login');
    } else {
        return view('profile');
        /*echo 'Welcome home' . Auth::user()->email .'.';*/
    }
});


Route::get('edit', function(){
    if(Auth::guest()){
        return Redirect::to('auth/login');
    } else {
        return view('edit');
        /*echo 'Welcome home' . Auth::user()->email .'.';*/
    }
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::resource('/profile','ProfileController');

// New Query Builder-based routes
//Route::group(['prefix' => 'admin'], function()
//{
    Route::get('admin/', 'AdminViewDataController@index');
    Route::get('admin/patient/{id}', 'AdminViewDataController@show');
    
    Route::post('admin/patientDatatable', 'AdminViewDataController@indexDatatable');
    Route::post('admin/symptomsData', 'AdminViewDataController@generateSymptonData');
//});



