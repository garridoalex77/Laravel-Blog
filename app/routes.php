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

Route::get('/login', 'HomeController@showLogin');

Route::post('/login', 'HomeController@login');

Route::get('/logout', 'HomeController@logout');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/rolldice/{guess?}', 'HomeController@rollDice');

Route::get('/whackamole', 'HomeController@showWhackamole');

Route::get('/simplesimon', 'HomeController@showSimplesimon');

Route::resource('/posts', 'PostsController');


