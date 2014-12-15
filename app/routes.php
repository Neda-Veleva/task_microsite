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

Route::post('/inquiries', array('before'=>'csrf', 'uses'=>'InquiryController@store'));

Route::get('/admin/create', 'UserController@create');
Route::post('/admin/', array('before'=>'csrf', 'uses'=>'UserController@store'));

Route::get('/admin/login', 'UserController@getLogin');
Route::post('/admin/login', array('before'=>'csrf', 'uses'=>'UserController@postLogin')); 

Route::group(array('before' => 'auth'), function(){
    Route::get('/admin/logout', 'UserController@logout');
    Route::get('/admin/inquiries', 'InquiryController@index');
    
    Route::get('/admin/page/create', 'PageController@create');
    Route::post('/admin/page', array('before'=>'csrf', 'uses'=>'PageController@store'));
    Route::get('/admin/page/index', 'PageController@index');
    Route::get('/admin/page/{id}/edit', 'PageController@edit');
    Route::post('/admin/page/{id}', array('before'=>'csrf', 'uses'=>'PageController@update'));
});

Route::get('/{slug}', function($slug){
    $page = Page::where('slug', $slug)->first();
    return View::make('pages.show')->with('page', $page);
});


View::composer('navigation', function($view){    
    $view->pages = Page::all();
});