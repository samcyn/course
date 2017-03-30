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

Route::get('/', 'IndexController@index');
Route::post('/', 'IndexController@store');


Route::get('/courses/{id}', 'CourseController@show');


Route::get('/courses/{id}/apply', 'ApplicationController@index');
Route::post('/courses/{id}/apply', 'ApplicationController@store');


Route::get('payment/{applicant_id}', 'PaymentController@index');


