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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('customer')->group(function () {
    Route::get('index', 'CustomerController@index');

    Route::get('create', 'CustomerController@index');

    Route::post('store', 'CustomerController@index');

    Route::get('{id}/show', 'CustomerController@index');

    Route::get('{id}/edit', 'CustomerController@index');

    Route::patch('{id}/update', 'CustomerController@index');

    Route::delete('{id}', 'CustomerController@index');
});
