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
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('master.master');
});

Route::get('/', [ 'as' => 'news', 'uses' => 'newsController@showStartPage']);


//Route::get('editProfile', [ 'as' => 'editProfile','middleware' => 'auth', 'uses' => 'profileController@edit']);
//Route::resource('editProfile', 'profileController');


Route::auth();


Route::group(['middleware' => ['web']], function () {
	Route::resource('profile/'.Auth::id(), 'profileController');
   // Route::get('profile', [ 'as' => 'profile/{:id}','middleware' => 'auth', 'uses' => 'profileController@show']);
});