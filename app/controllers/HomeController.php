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
		$sports = Sport::all();
		$cities = Location::all();
		/* pull list of cities for events from events table city column */
		$sportDropdown = [];
		$sportDropdown[-1] = 'Select a Sport';

		$cityDropdown = [];
		$cityDropdown[-1] = 'Select a City';

		foreach ($sports as $sport) {
			$sportDropdown[$sport->id] = $sport->sport;
		}

		foreach ($cities as $city) {
			$cityDropdown[$city->id] = $city->city;
		}

		return View::make('home')->with('sportDropdown', $sportDropdown)->with('cityDropdown', $cityDropdown);
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function showDashboard()
	{
		return View::make('dashboard');
	}

	public function showSearchResults()
	{
		return View::make('results');
	}

	public function showTheShow()
	{
		return View::make('show');
	}

	public function showSports()
	{
		return View::make('sports');
	}


}
