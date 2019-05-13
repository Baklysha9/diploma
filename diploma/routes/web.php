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

Route::get('', 'MainController@index');
Route::post('sendEmail', 'MainController@sendEmail');

Route::get('services', 'ServiceController@index');
Route::get('getServices', 'ServiceController@getServices');
Route::get('/getService/{id}', 'ServiceController@getService');

Route::get('price', 'PriceController@index');
