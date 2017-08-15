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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('pharmacies', 'PharmacyController@index');
Route::get('pharmacies/{pharmacy}', 'PharmacyController@show');
Route::post('pharmacies', 'PharmacyController@store');
Route::put('pharmacies/{pharmacy}', 'PharmacyController@update');
Route::delete('pharmacies/{pharmacy}', 'PharmacyController@delete');
