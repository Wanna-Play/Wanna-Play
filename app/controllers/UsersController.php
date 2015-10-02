<?php

class UsersController extends \BaseController {

	public function __construct ()
	{
		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('login', 'doLogin', 'create', 'store')));

		// Filter for isAdmin
		$this->beforeFilter('isAdmin', array('only' => array('index')));

		// Filter for isOwnerAdmin
		$this->beforeFilter('isOwnerAdmin', array('only' => array('edit', 'update', 'destroy', 'updatePassword', 'saveNewPassword')));

	}

	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::paginate(15);

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
		if(!Auth::check()){
			return Redirect::action('UsersController@login');
		}
		$user = User::findOrFail($id);
		if(!$user) {

			$message = "User not found";

			Log::error($message);

			Session::flash('errorMessage', 'User not found');


			return Redirect::action('UsersController@login');
		}

		return View::make('users.show', compact('user'));
	}



	public function dash()
	{
		$id = Auth::id();
		$user = User::findOrFail($id);

		return View::make('users.dash', compact('user'));
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if(!Auth::check()){
			return Redirect::action('UsersController@login');
		}
		$user = User::findOrFail($id);

		if ((Auth::user()->role == 'admin') || (Auth::id() == $user->id)) {
			return View::make('users.edit', compact('user'));
		}else{
			Session::flash('errorMessage', 'Account not authorized for this action.');
			return Redirect::action();
		}
	}
/*	public function edit($id)
	{
		if(Auth::id() == $id){
			$user = Auth::user();
			return View::make('users.edit')->with('user',$user);
		}else{

			return Redirect::action('UsersController@show()');
		}
	}*/

	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function update($id)
	{
		/* Perform auth ID check before allowing user to update */
			$user = User::find(Auth::user()->id);
			$user->profile_picture = Input::get('profile_picture');
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
	    	$user->city  = Input::get('city');
	    	$user->zip = Input::get('zip');
	    	$user->email    = Input::get('email');
			$user->gender = Input::get('gender');
			$user->username = Input::get('username');
			$user->sports_list = Input::get('sports_list');

			$user->save();
		// set flash data to show successful logon - retrieve flash data (same as any other session variable)
			Session::flash('successMessage', 'Updated successfully.');

			if (!$user->save()) {
			     $errors = $user->getErrors();
			     /*This page shows a specific user profile by user's id #;*/
			     return View::make('users.edit')->with('user', $user);

			} else {
				return Redirect::action('UsersController@dash');
			}
	}
	/**
	 * Remove the specified user from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$id = Auth::id();
		User::find($id)->delete();
		Log::info('User Deleted with attached information: ', Input::all());
		Session::flash('successMessage', 'User successfully deleted.');
		return Redirect::action('UsersController@login');
	}

	public function validateAndSave($user)
	{

		try {

			$uploads_directory = 'images/uploads/';

			if(Input::hasFile('profile_picture')) {
				$filename = Input::file('profile_picture')->getClientOriginalName();
				$user->profile_picture = Input::file('profile_picture')->move($uploads_directory, $filename);
			}else{
				$user->profile_picture = "http://lorempixel.com/200/200/sports/6/";
			}
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
	    	$user->city  = Input::get('city');
	    	$user->zip = Input::get('zip');
	    	$user->email    = Input::get('email');
			$user->gender = Input::get('gender');
			$user->username = Input::get('username');
			$user->password = Input::get('password');
			$user->password_confirmation = Input::get('password_confirmation');

			$user->saveOrFail();

			/* Laravel automatically calls set SportsListAttriute - tagging favorite sports*/

			$user->sports_list = Input::get('sports_list');
			if (Request::wantsJson()) {
				return Response::json(array('Status' => 'Request Succeeded'));
	        } else {
				Session::flash('successMessage', 'Your Player has been successfully saved.');

				return Redirect::action('UsersController@show', array($user->id));
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
		// dd($email_or_username, $password);

		if (Auth::attempt(array('email' => $email_or_username, 'password' => $password), true) ||
			Auth::attempt(array('username' => $email_or_username, 'password' => $password), true))
		{
			Log::info('Login Successful - ', array('User = ' => Input::get('email_or_username')));
			// return 'test';
		    return Redirect::action('UsersController@dash');

		} else {

			// return 'test2';
			Log::error('Login Error on : ' . Input::get('email'));
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

	public function updatePassword ()
	{
		$id = Auth::id();
		$user = User::find($id);
		return View::make('user.update-password')->with('user', $user);
	}

	public function saveNewPassword () {

		$id = Auth::id();

		$user = User::find($id);

		if(Auth::attempt(array('id' => $id, 'password' => Input::get('old_password')))) {

			$user->password =  Input::get('password');

			$user->password_confirmation =  Input::get('password_confirmation');

			$user->save();

		return Redirect::action('UsersController@show');

		} else {
			$message = "Password Error";

			Log::error($message);

			Session::flash('errorMessage', 'Old Password Incorrect.  Please resubmit');

			return Redirect::action('UsersController@updatePassword');

		}

	    if(!$user) {

	    	$message = "User not found.";

	    	Log::warning($message);

			Session::flash('errorMessage', "User not found");

			App::abort(404);
		}

	}
}
