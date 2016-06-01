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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/resume', function()
{
    return 'Resume';
});

Route::get('/portfolio', function()
{
    return 'Portfolio';
});

Route::get('/rolldice/{guess?}', function($guess = 'Guess a number 1-6')
{
    $roll = mt_rand(1, 6);
    if ($guess == $roll)
    {
        $message = 'Correct';
    }
    else 
    {
        $message = 'Try again';
    }
    $data = array(
        'guess' => $guess,
        'roll' => $roll,
        'message' => $message
        );
    
    return View::make('roll-dice')->with($data);
});

