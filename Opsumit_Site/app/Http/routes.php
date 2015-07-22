<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');
Route::get('/seraphin_study', 'PagesController@seraphin_study');
Route::get('/efficacy', 'PagesController@efficacy');
Route::get('/safety_profile', 'PagesController@safety_profile');
Route::get('/about', 'PagesController@about');
Route::get('/prescribing', 'PagesController@prescribing_opsumit');
Route::get('/services', 'PagesController@services_and_support');
Route::get('/resources', 'PagesController@pah_resources');
