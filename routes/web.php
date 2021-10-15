<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('bookitems')->group(function () {

    Route::get('','BookitemController@index')->name('bookitem.index');
    Route::get('create','BookitemController@create')->name('bookitem.create');
    Route::post('store','BookitemController@store')->name('bookitem.store');

});
