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

Route::get('create', 'HomeController@showCreateEvent');

Route::get('results', 'HomeController@showSearchResults');

Route::get('show', 'HomeController@showTheShow');

Route::resource('users', 'UsersController');


