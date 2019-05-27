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
Auth::routes();

Route::get('', 'MainController@index')->name('main');
Route::get('getCountBuy', 'MainController@getCountBuy');
Route::post('sendEmail', 'MainController@sendEmail');


Route::get('services', 'ServiceController@index');
Route::get('getServices', 'ServiceController@getServices');
Route::get('/getService/{id}', 'ServiceController@getService');

Route::get('price', 'PriceController@index');
Route::get('contacts', 'ContactsController@index');

Route::get('home', 'HomeController@index')->name('home');
Route::get('logout','Auth\LoginController@logout');


Route::group(['middleware' => 'admin'], function () {
    Route::get('admin-panel', 'AdminController@index');
    Route::get('admin-countUser', 'AdminController@countUser');
    Route::get('admin-getUsers', 'AdminController@getUsers');
    Route::post('admin-updateService', 'ServiceController@updateService');
    Route::post('admin-deleteService', 'ServiceController@deleteService');
});


