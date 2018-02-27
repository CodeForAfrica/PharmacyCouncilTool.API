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

    // Premises API route.
    Route::post('premises', 'PremiseController@store');
    Route::get('premises', 'PremiseController@index');
    Route::get('premises/{premise}', 'PremiseController@show');
    Route::put('premises/{premise}', 'PremiseController@update');
    Route::delete('premises/{premise}', 'PremiseController@delete');

    // Addos API route.
    Route::post('addos', 'AddoController@store');
    Route::get('addos', 'AddoController@index');
    Route::get('addos/{addo}', 'AddoController@show');
    Route::put('addos/{addo}', 'AddoController@update');
    Route::delete('addos/{addo}', 'AddoController@delete');

    // Owners API route.
    Route::post('owners', 'OwnerController@store');
    Route::get('owners', 'OwnerController@index');
    Route::get('owners/{owner}', 'OwnerController@show');
    Route::put('owners/{owner}', 'OwnerController@update');
    Route::delete('owners/{owner}', 'OwnerController@delete');

    // Personnels API route.
    Route::post('personnels', 'PersonnelController@store');
    Route::get('personnels', 'PersonnelController@index');
    Route::get('personnels/{personnel}', 'PersonnelController@show');
    Route::put('personnels/{personnel}', 'PersonnelController@update');
    Route::delete('personnels/{personnel}', 'PersonnelController@delete');

    // Attendances API route.
    Route::post('attendances', 'AttendanceController@store');
    Route::get('attendances', 'AttendanceController@index');
    Route::get('attendances/{attendance}', 'AttendanceController@show');
    Route::put('attendances/{attendance}', 'AttendanceController@update');
    Route::delete('attendances/{attendance}', 'AttendanceController@delete');

    // Users API route.
    Route::get('users', 'UserController@index');
    Route::get('users/{user}', 'UserController@show');
    Route::post('users', 'UserController@store');
    Route::put('users/{user}', 'UserController@update');
    Route::delete('users/{user}', 'UserController@delete');

    // Regions API route.
    Route::get('regions', 'RegionController@index');
    Route::get('regions/{region}', 'RegionController@show');
    Route::post('regions', 'RegionController@store');
    Route::put('regions/{region}', 'RegionController@update');
    Route::delete('regions/{region}', 'RegionController@delete');

    // Districts API route.
    Route::get('districts', 'DistrictController@index');
    Route::get('districts/{district}', 'DistrictController@show');
    Route::post('districts', 'DistrictController@store');
    Route::put('districts/{district}', 'DistrictController@update');
    Route::delete('districts/{district}', 'DistrictController@delete');

    // Wards API route.
    Route::get('wards', 'WardController@index');
    Route::get('wards/{ward}', 'WardController@show');
    Route::post('wards', 'WardController@store');
    Route::put('wards/{ward}', 'WardController@update');
    Route::delete('wards/{ward}', 'WardController@delete');

    //Datatables API route.
    Route::post('datatables/getpremises', 'DatatablesController@getPremises');
    Route::post('datatables/getowners', 'DatatablesController@getOwners');
    Route::post('datatables/getpersonnels', 'DatatablesController@getPersonnels');
    Route::post('datatables/getdispensers', 'DatatablesController@getDispensers');
    Route::post('datatables/getusers', 'DatatablesController@getUsers');
    Route::post('datatables/getattendances', 'DatatablesController@getAttendances');
    Route::post('datatables/getreports', 'DatatablesController@getReports');
});

Route::group(['middleware' => 'cors'], function(){
    // Pharmacies API Routes without Token.
    Route::get('pharmacies', 'PharmacyController@index');
    Route::get('pharmacies/{pharmacy}', 'PharmacyController@show');

    // Reports API routes without Token.
    Route::post('reports', 'ReportController@store');

    // AttendanceCollector API route.
    Route::get('attendancecollector', 'AttendanceCollectorController@index');

    // User Login API Routes without Token.
    Route::get('user/login', 'Auth\APILoginController@index');
    Route::get('user/auth', 'Auth\APILoginController@getAuthenticatedUser');
});