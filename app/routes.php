<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@home');

Route::get('/information', 'HomeController@info');

Route::get('/inquiries', 'HomeController@createInquiries');
Route::post('/inquiries', 'HomeController@storeInquiries');

Route::get('/admin/logout', 'UserController@logout');

Route::get('/admin/create', 'UserController@create');
Route::post('admin/', array('before'=>'csrf', 'uses'=>'UserController@store'));

Route::get('/admin/login', 'UserController@getLogin');
Route::post('/admin/login', array('before'=>'csrf', 'uses'=>'UserController@postLogin')); 
