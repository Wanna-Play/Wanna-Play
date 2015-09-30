@extends('layouts.master')

@section('content')
<div class="col-xs-12">
	<section id="playerStatsShow">
		@foreach($errors->all() as $error)
	        <div class="alert alert-warning" role="alert">{{{ $error }}}</div>
	    @endforeach

	    <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-sm-offset-1 col-md-offset-2 col-md-8 col-md-offset-2 pull-left">
	    	<h2>Your Profile</h2>
	    	<div class="form-group" @if($errors->has('first_name')) has-error @endif>
		    	<label>Full Name</label>
		    	<p>{{ $user->first_name }} {{ $user->last_name }}</p>
		    </div>

		    <div class="form-group" @if($errors->has('sports')) has-error @endif>
		    	<label>Favorite Sports</label>
		    	<p></p>
		    </div>

	    	<div class="form-group col-xs-12 col-sm-6 pull-left noPaddingLeft" @if($errors->has('city')) has-error @endif>
		    	<label>City</label>
				<p>{{ $user->city }}</p>
			</div>

			<div class="form-group col-xs-12 col-sm-3 noPaddingLeft noPaddingRight" @if($errors->has('zip')) has-error @endif>
				<label>ZIP Code</label>
				<p>{{ $user->zip }}</p>
			</div>

			<div class="form-group col-xs-12 col-sm-3 noPaddingLeft noPaddingRight" @if($errors->has('gender')) has-error @endif>
				<label>Gender</label>
				<p>{{ $user->gender }}</p>
			</div>

			<div class="form-group" @if($errors->has('email')) has-error @endif>
				<label>Email</label>
				<p>{{ $user->email }}</p>
			</div>

			<div class="form-group" @if($errors->has('username')) has-error @endif>
				<label>Username</label>
				<p>{{ $user->username }}</p>
			</div>

    			<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3 media">
					<a href="{{{ action('UsersController@edit') }}}" class="btn btn-lg btn-block">Update Profile</a>
				</div>
	    </div>
	</section>

	<section id="updatePasswordShow">
		<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-sm-offset-1 col-md-offset-2 col-md-8 col-md-offset-2 pull-left">
			<h2>Update Password</h2>
			<p>Please note, to update your password, we will redirect you to a separate page.</p>

			<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3 media">
				<a href="#" class="btn btn-lg btn-block">Update Password</a>
			</div>
		</div>
	</section>

	<section id="userEventsShow">
		<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-sm-offset-1 col-md-offset-2 col-md-8 col-md-offset-2 pull-left">
			<h2>Your Events</h2>
			<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3 noFloatButton">
				<a href="{{ action('GameEventsController@create')}}" class="btn btn-lg btn-block">Create A New Event</a>
			</div>

			<h3>Upcoming Events</h3>
			{{-- Events that the user has posted or RSVP'd to will be listed in this section. Couldn't get my syntax to work, however, if someone can make that work, that'd be awesome. --}}

			<ul>
				<li>Oct. 1st, 6 p.m. | Basketball at Woodlawn Park <a href="#" class="btn btn-xs btn-primary">Edit</a></li>
				<li>Oct. 3rd, 7 a.m. | Swimming at San Pedro Springs Park <a href="#" class="btn btn-xs btn-primary">Cancel RSVP</a></li>
				<li>Oct. 5th, 6 p.m. | Golf at Brackenridge <a href="#" class="btn btn-xs btn-primary">Edit</a></li>
			</ul>

			<h3>Past Events</h3>
			<ul>
				<li>Sept. 1st, 4 p.m. | Disc Golf at Trinity</li>
			</ul>
		</div>
	</section>


</div>




@stop
