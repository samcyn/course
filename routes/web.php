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

Route::get('/about-us', 'IndexController@about');

Route::get('/faq', 'IndexController@faq');
Route::get('/faq/{slug}', 'IndexController@singleFaq');



Route::get('/courses', 'CourseController@index');
Route::get('/courses/{slug}', 'CourseController@show');


Route::get('/courses/{slug}/apply', 'ApplicationController@index');
Route::post('/courses/{slug}/apply', 'ApplicationController@store');


Route::get('payment/{applicant_id}', 'PaymentController@index');

Route::post('/transaction', 'PaymentController@store');
Route::post('/transaction/{transaction_id}/edit', 'PaymentController@update');



Route::get('/checkout/{applicant_id}', 'PaymentController@bankCheckout');
Route::get('/thankyou/{applicant_id}', 'PaymentController@status');



Route::resource('/admin/applicants', 'Admin\\ApplicantsController');
Route::resource('/admin/courses', 'Admin\\CoursesController');
Route::get('/admin', 'Admin\\ApplicantsController@index');





Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('admin/faqs', 'Admin\\FaqsController');