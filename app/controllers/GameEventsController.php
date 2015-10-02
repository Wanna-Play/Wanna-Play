<?php

class GameEventsController extends \BaseController {
	/**
	 * Display a listing of gameevents
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = GameEvent::with('organizer');
		$search = Input::get('search');
		if (!empty($search)) {
			$query->where('event_name', 'like', '%' . $search . '%');
		}
		$events = $query->orderBy('start_time', 'DESC')->paginate(10);
		return View::make('game_events.index')->with(array('events' => $events));
	}

	public function getManage()
	{
		if(!Auth::check()){
			return Redirect::action('GameEventsController@index');
		}elseif(Auth::user()->role == 'admin'){
			$events = GameEvent::paginate(10);
			return View::make('game_events.manage')->with(array('events' => $events));
		}else{
			$query = GameEvent::with('organizer');
			$query->where('organizer_id', Auth::user()->id);
			$events = $query->orderBy('created_at', 'DESC');
			return View::make('game_events.manage')->with(array('events'=> $events));
		}
	}
	/**
	 * Show the form for creating a new gameevent
	 *
	 * @return Response
	 */
	public function create()
	{
		// if(!Auth::check()){
		// 	return Redirect::action('UsersController@doLogin');
		// }
		
		$sports = Sport::all();
		$sportDropdown = [];
		$sportDropdown[-1] = 'Select This Event\'s Sport';
		
		foreach ($sports as $sport) {
			$sportDropdown[$sport->id] = $sport->sport;
		}
		
		return View::make('game_events.create')->with('sportDropdown', $sportDropdown);
	}
	/**
	 * Store a newly created gameevent in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$event = new GameEvent();
		$location = new Location();
		Log::info("Event created successfully");
		Log::info("Log Message", array('context' => Input::all()));
		return $this->validateAndSave($event, $location);
	}
	/**
	 * Display the specified gameevent.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$event = GameEvent::findOrFail($id);
		return View::make('game_events.show', compact('event'));
	}
	/**
	 * Show the form for editing the specified gameevent.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$event = GameEvent::find($id);
		if (!$event) {
			App::abort(404);
		}
		if(!Auth::check()){
			return Redirect::action('UsersController@doLogin');
		} elseif ((Auth::id() == $event->creator_id) || (Auth::user()->role == 'admin')) {
			
			$sports = Sport::all();
			$sportDropdown = [];
			$sportDropdown[-1] = 'Select This Event\'s Sport';

			foreach ($sports as $sport) {
				$sportDropdown[$sport->id] = $sport->sport;
			}
			
			return View::make('game_events.edit')->with('sportDropdown', $sportDropdown);

			} else {
				Session::flash('errorMessage', 'Access not authorized');
				return Redirect::action('GameEventsController@index');
			}
	}
	/**
	 * Update the specified calendarevent in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$event = GameEvent::findOrFail($id);
		$location = Location::findOrFail($event->location_id);
		if(!$event){
			App::abort(404);
		}
		return $this->validateAndSave($event, $location);
	}
	/**
	 * Remove the specified gameevent from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$event = GameEvent::findOrFail($id);
		$event->delete();
        if (Request::wantsJson()) {
            return Response::json(array('Status' => 'Request Succeeded'));
        } else {
			Session::flash('successMessage', 'This event has been successfully deleted.');
            return Redirect::action('GameEventsController@index');
        }
	}
	public function validateAndSave($event, $location)
	{
		try {
			$uploads_directory = 'images/uploads/';
			if(Input::hasFile('event_image')) {
				$filename = Input::file('event_image')->getClientOriginalName();
				$event->event_image = Input::file('event_image')->move($uploads_directory, $filename);
			}
			if (Input::get('location') == '-1') {
		    	$location->name_of_location   	= Input::get('name_of_location');
		    	$location->address 	= Input::get('address');
		    	$location->city    = Input::get('city');
		    	$location->state   = Input::get('state');
		    	$location->zip 	= Input::get('zip');
		    	$location->phone = Input::get('phone');
		    	$location->url = Input::get('url');
		    	$location->saveOrFail();
		    } else {
		    	$location = Location::findOrFail(Input::get('location'));
		    }
	    	$event->start_time  = Input::get('start_time');
	    	$event->end_time    = Input::get('end_time');
			$event->event_name 	= Input::get('event_name');
			$event->description = Input::get('description');
			$event->amount 		= Input::get('amount');
			$event->location_id = $location->id;
			$event->creator_id 	= Auth::id();
			$event->saveOrFail();
			if (Request::wantsJson()) {
				return Response::json(array('Status' => 'Request Succeeded'));
	        } else {
				Session::flash('successMessage', 'Your event has been successfully saved.');
				return Redirect::action('GameEventsController@show', array($event->id));
			}
		} catch(Watson\Validating\ValidationException $e) {
			Session::flash('errorMessage',
				'Ohh no! Something went wrong. You should be seeing some errors down below.');
	    	Log::info('Validator failed', Input::all());
	        return Redirect::back()->withInput()->withErrors($e->getErrors());
		}
	}
}
