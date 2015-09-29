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

			if(Input::hasFile('user_image')) {
				$filename = Input::file('user_image')->getClientOriginalName();
				$user->user_image = Input::file('user_image')->move($uploads_directory, $filename);
			}
	    	$user->city  = Input::get('city');
	    	$user->end_time    = Input::get('end_time');
			$user->user_name 	= Input::get('user_name');
			$user->description = Input::get('description');
			$user->cost 		= Input::get('cost');


			/*tagging favorite sports*/
			$user->sports_list = Input::get('sports_list');
			$this->setSportListAttribute(Input::get('sports_list'), $user->id);

			$user->saveOrFail();
			if (Request::wantsJson()) {
				return Response::json(array('Status' => 'Request Succeeded'));
	        } else {
				Session::flash('successMessage', 'Your Player has been successfully saved.');
				return Redirect::action('HomeController@showDashboard', array($user->id));
			}
		} catch(Watson\Validating\ValidationException $e) {
			Session::flash('errorMessage',
				'Ohh no! Something went wrong. You should be seeing some errors down below.');
	    	Log::info('Validator failed', Input::all());
	        return Redirect::back()->withInput()->withErrors($e->getErrors());
		}
	}

	public function setSportListAttribute($value, $user_id) 
	{
		$user = User::find($user_id);
		$sportIds = [];
		$sports = explode (',', $value);
		foreach ($sports as $sportName) {
			/* firstOrCreate uses first instance or creates a new instantiation - 
			stops sports table from duplicating sport names*/
			$sport = Sport::firstOrCreate(array('name'=>$sportName));
			$sportIds[] = $sport->id;
			/* sync is a Laravel method to attach related models; 
			sync accepts array of ids to be placed on pivot table
			only the ids in the array will be on the intermediate table sport_user pivot table*/
			$user->sports()->sync($sportIds);
		}
	}
}
