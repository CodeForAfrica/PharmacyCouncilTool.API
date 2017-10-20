<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::group(['middleware' => ['auth:api','cors']], function(){
    // Pharmacies API routes with Token.
    Route::post('pharmacies', 'PharmacyController@store');
    Route::put('pharmacies/{pharmacy}', 'PharmacyController@update');
    Route::delete('pharmacies/{pharmacy}', 'PharmacyController@delete');

    // Reports API route.
    Route::get('reports', 'ReportController@index');
    Route::get('reports/{report}', 'ReportController@show');
    Route::put('reports/{report}', 'ReportController@update');
    Route::delete('reports/{report}', 'ReportController@delete');

    // Dispensers API route.
    Route::post('dispensers', 'DispenserController@store');
    Route::get('dispensers', 'DispenserController@index');
    Route::get('dispensers/{dispenser}', 'DispenserController@show');
    Route::put('dispensers/{dispenser}', 'DispenserController@update');
    Route::delete('dispensers/{dispenser}', 'DispenserController@delete');
    // Users API route.
    Route::get('users', 'UserController@index');
    Route::get('users/{user}', 'UserController@show');
    Route::post('users', 'UserController@store');
    Route::put('users/{user}', 'UserController@update');
    Route::delete('users/{user}', 'UserController@delete');
});

Route::group(['middleware' => 'cors'], function(){
    // Pharmacies API Routes without Token.
    Route::get('pharmacies', 'PharmacyController@index');
    Route::get('pharmacies/{pharmacy}', 'PharmacyController@show');

    // Reports API routes without Token.
    Route::post('reports', 'ReportController@store');

    // User Login API Routes without Token.
    Route::get('user/login', 'Auth\APILoginController@index');
    Route::get('user/auth', 'Auth\APILoginController@getAuthenticatedUser');
});