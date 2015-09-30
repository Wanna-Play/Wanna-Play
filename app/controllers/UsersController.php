<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::pagintate(15);

		return View::make('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new user
	 *
	 * @return Response
	 */
	public function create()
	{

		$dropdown     = [];
		$dropdown[-1] = 'Add new City';
		foreach ($cities as $city) {
			$dropdown[$city->id] = $city->name;
		}

		return View::make('users.create')->with('dropdown', dropdown);
	}

	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new User();

		Log::info("Player created successfully");
		Log::info("Log Message", array('context' => Input::all()));

		return $this->validateAndSave($user);
	}

	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);

		return View::make('users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

		return View::make('users.edit', compact('user'));
	}

	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::findOrFail($id);

		$validator = Validator::make($data = Input::all(), User::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$user->update($data);

		return Redirect::route('users.index');
	}

	/**
	 * Remove the specified user from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);

		return Redirect::route('users.index');
	}

	public function validateAndSave($user)
	{

		try {

			$uploads_directory = 'images/uploads/';

			if(Input::hasFile('profile_picture')) {
				$filename = Input::file('profile_picture')->getClientOriginalName();
				$user->profile_picture = Input::file('profile_picture')->move($uploads_directory, $filename);
			}
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
	    	$user->city  = Input::get('city');
	    	$user->zip = Input::get('zip');
	    	$user->email    = Input::get('email');
			$user->gender = Input::get('gender');
			$user->username = Input::get('user_name');
			$user->password = Input::get('password');
			$user->password_confirmation = Input::get('password_confirmation');

			$user->saveOrFail();

			/* Laravel automatically calls set SportsListAttriute - tagging favorite sports*/
			$user->sports_list = Input::get('sports');
			if (Request::wantsJson()) {
				return Response::json(array('Status' => 'Request Succeeded'));
	        } else {
				Session::flash('successMessage', 'Your Player has been successfully saved.');
				/*return Redirect::action('HomeController@showDashboard', array($user->id));*/
			}
		} catch(Watson\Validating\ValidationException $e) {
			Session::flash('errorMessage',
				'Ohh no! Something went wrong. You should be seeing some errors down below.');
	    	Log::info('Validator failed', Input::all());
	        return Redirect::back()->withInput()->withErrors($e->getErrors());
		}
	}

	public function login()
	{
		return View::make('login');
	}

	public function logout()
	{
		return View::make('logout');
	}

	public function doLogin()
	{
		$email_or_username = Input::get('email_or_username');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email_or_username, 'password' => $password), true) ||
			Auth::attempt(array('username' => $email_or_username, 'password' => $password), true)) {
			Log::info('Login Successful - ', array('User = ' => Input::get('email_or_username')));
		    return Redirect::intended();

		} else {

			// Log::error('Login Error on : ', Input::get('email'));
			Session::flash('errorMessage', 'Problem with email and/or password. Please resubmit');

		    return Redirect::action('UsersController@login');
		}
	}

	public function doLogout()
	{
		Auth::logout();

		Session::flash('successMessage', 'Logout successfully completed');

		return Redirect::to('/');

	}
}
