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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\AirconList;

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'AirconListController@index')->name('dashboard');

    Route::resource('transactions', 'TransactionController');
    Route::post('transaction', 'TransactionController@createTransaction')->name('transac.create');
    Route::resource('items', 'ItemController');


    Route::get('home', 'AirconListController@index')->name('home');

    Route::get('lists', 'AirconListController@data');

    Route::post('uploading-data', 'AirconListController@import')->name('upload');

    Route::post('upload-data', 'PhilippineRegProvMunCitController@upload')->name('upload.data');

    Route::get('delete-records', function(){
        AirconList::truncate();
        return redirect()->route('dashboard')->withSuccess('Records Deleted Successfully');
    })->name('destroy');
});
