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
Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function(){
        return view('pages.dashboard');
    })->name('dashboard');

    Route::resource('transactions', 'TransactionController');
    Route::post('transaction', 'TransactionController@createTransaction')->name('transac.create');
    Route::resource('items', 'ItemController');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('lists', 'AirconListController@data');
