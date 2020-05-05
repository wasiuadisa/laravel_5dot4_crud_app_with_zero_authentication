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

/*
 **************************************************************
 *                                                            *
 * The following are routes for Laravel_CRUD functionalites   *
 *                                                            *
 **************************************************************
*/

//This route, using the GET method, seeks the method, 'home', in CreatesController class
Route::get('/', 'CreatesController@home');

//This route, using the GET method, seeks the method, 'create', in CreatesController class
Route::get('/create', 'CreatesController@create');

//This route, using the GET method, seeks the method, 'home', in CreatesController class
Route::post('/insert', 'CreatesController@add');

//This route, using the GET method, seeks the method, 'update' form, in CreatesController class
Route::get('/update/{id}', 'CreatesController@update');

//This route, using the POST method, seeks the method, 'edit' form, in CreatesController class
Route::post('/edit/{id}', 'CreatesController@edit');

//This route, using the GET method, seeks the method, 'home', in CreatesController class
Route::get('/delete/{id}', 'CreatesController@delete');

//This route, using the GET method, seeks the method, 'home', in CreatesController class
Route::get('/read/{id}', 'CreatesController@read');
