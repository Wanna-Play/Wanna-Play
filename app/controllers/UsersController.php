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
		return View::make('users.create');
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


	public function validateAndSave($user, $city)
	{

		try {

			$uploads_directory = 'images/uploads/';

			if(Input::hasFile('user_image')) {
				$filename = Input::file('user_image')->getClientOriginalName();
				$user->user_image = Input::file('user_image')->move($uploads_directory, $filename);
			}
	    	$user->city  = Input::get('city');
	    	$user->end_time    = Input::get('end_time');
			$user->user_name 	= Input::get('user_name');
			$user->description = Input::get('description');
			$user->cost 		= Input::get('cost');

			$user->city_id = $city->id;
			$user->creator_id 	= Auth::id();

			$user->saveOrFail();
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
}
