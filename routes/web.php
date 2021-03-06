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

Route::get('/work','WorkController@index');
Route::get('/prof','ProfController@index');

Route::get('/contact_form','ContactFormController@index');
Route::post('/contact_check','ContactCheckController@index');
Route::post('/contact_send','ContactSendController@index');