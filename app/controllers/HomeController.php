<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
	
	public function showLogin()
	{
		return View::make('login');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function rollDice($guess = 'Take a guess')
	{
	    $roll = mt_rand(1, 6);
	    $message = ($guess == $roll) ? 'Correct' : 'Try again';
	    $data = [
	        'guess' => $guess,
	        'roll' => $roll,
	        'message' => $message
	        ];
	    return View::make('roll-dice')->with($data);
	}

	public function showWhackamole()
	{
		return View::make('whackamole');
	}

	public function showSimplesimon()
	{
		return View::make('simplesimon');
	}

	public function showWeather()
	{
		return View::make('weather_map');
	}

	public function login()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
			Session::flash('success message', 'Login Successful');
			$loggedInUser = Auth::user();
		    return Redirect::action('PostsController@index');
		} else {
			Session::flash('fail message', 'Login Failed');
		    return View::make('login');
		}
	}

	public function logout()
	{
		if (Auth::check()) {
			Auth::logout();
			Session::flash('logout message', 'Logged Out');
			return Redirect::action('PostsController@index');
		}
	}
}
