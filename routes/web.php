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

Route::get('/', 'ListingsController@index');

//Route::get('/', 'LarabizController@index');

//Route::resource('larabiz', 'LarabizController');

Auth::routes();
Route::get('listings', 'ListingsController@index');
Route::get('listings/create', 'ListingsController@create');
Route::get('listings/{id}/edit', 'ListingsController@edit'); //->name('test.edit');
Route::get('/dashboard', 'DashboardController@index'); //->name('home');
Route::post('store', 'ListingsController@store');
Route::put('update/{id}', 'ListingsController@update');
Route::delete('destroy/{id}', 'ListingsController@destroy');
