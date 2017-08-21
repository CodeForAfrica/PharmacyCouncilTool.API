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

Route::group(['middleware' => 'auth:api'], function(){
    // Pharmacies API Route
    Route::get('pharmacies/{pharmacy}', 'PharmacyController@show');
    Route::post('pharmacies', 'PharmacyController@store');
    Route::put('pharmacies/{pharmacy}', 'PharmacyController@update');
    Route::delete('pharmacies/{pharmacy}', 'PharmacyController@delete');

    // Reports API Route
    Route::get('reports', 'ReportController@index');
    Route::get('reports/{report}', 'ReportController@show');
    Route::post('reports', 'ReportController@store');
    Route::put('reports/{report}', 'ReportController@update');
    Route::delete('reports/{report}', 'ReportController@delete');
});

Route::group(['middleware' => 'cors'], function(){
    Route::get('pharmacies', 'PharmacyController@index');
});