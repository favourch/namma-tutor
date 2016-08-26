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
	echo 'holla';
    return File::get(public_path().'/index.html');

    //return File::get(public_path().'/App/tutor/index.html');
});

/*Locatio APi's*/
Route::get('city', 'Location@getCity');
Route::get('areas/{id}', 'Location@getArea');


/*Profile API's*/
Route::get('profile/{id}', 'Profile@Tutor');
Route::get('subject/{id}', 'Profile@TeachesSubject');


/*Search APi's*/
//Basic Search
Route::get('search/{city}/{search}', 'Search@BasicSearch');
Route::post('advancesearch', 'Search@AdvanceSearch');

/*Authenticate APi's*/
Route::post('auth/login', 'AuthenticateJWT@authenticate');
Route::post('auth/signup', 'AuthenticateJWT@signup');
Route::get('auth/me', ['middleware' => 'jwt.auth', 'uses' => 'AuthenticateJWT@getUser']);

