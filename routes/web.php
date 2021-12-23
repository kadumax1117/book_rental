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

Route::get('/user','UserController@index');
Route::post('/user','UserController@create');



Route::get('/book','BookController@index');

Route::get('/reserve','ReserveController@index');
Route::post('/reserve','ReserveController@index');

Route::get('user/add','UserController@add');
Route::post('user/add','UserController@add');
