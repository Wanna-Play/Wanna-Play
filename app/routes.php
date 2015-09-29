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


Route::get('/', 'HomeController@showWelcome');

Route::get('login', 'HomeController@showLogin');

Route::get('dashboard', 'HomeController@showDashboard');

Route::get('results', 'HomeController@showSearchResults');

Route::get('show', 'HomeController@showTheShow');

#Events Resource
Route::resource('events', 'GameEventsController');

#Users Resource
Route::resource('users', 'UsersController');



