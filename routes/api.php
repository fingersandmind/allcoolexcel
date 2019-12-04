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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


    Route::resource('regions', 'Api\RegionsController')->only('index', 'show');
    Route::resource('provinces', 'Api\ProvincesController')->only('index', 'show');
    Route::resource('cities', 'Api\CitiesController')->only('index', 'show');
    Route::resource('barangays', 'Api\BarangaysController')->only('index', 'show');

    Route::get('province-radius', 'Api\ProvincesController@provinceRadius');
    Route::get('province-cities', 'Api\CitiesController@cities');
    Route::get('city-barangays', 'Api\BarangaysController@barangays');