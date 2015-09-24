@extends('layouts.master')

@section('content')
<div class="col-xs-12">
	<div id="playerStats">
		<div class="col-xs-12 col-sm-9 pull-left">
			<form>
				<h2>Player Stats</h2>
				<div class="form-group col-sm-6 noPaddingLeft">
					<label for="firstName">First name</label>
					<input type="text" class="form-control" id="firstName">
				</div>
				<div class="form-group col-sm-6 noPaddingLeft noPaddingRight">
					<label for="lastName">Last name</label>
					<input type="text" class="form-control" id="lastName">
				</div>
				<div class="form-group">
					<label for="faveSports">Favorite sports</label>
					<input type="text" class="form-control" id="faveSports">
				</div>
				<div class="form-group col-sm-6 pull-left noPaddingLeft">
					<label for="selectCity">City</label>
					<input type="text" class="form-control" id="selectCity">
				</div>
				<div class="form-group col-sm-4 noPaddingLeft noPaddingRight">
					<label for="zipCode">ZIP code</label>
					<input type="text" class="form-control" id="zipCode">
				</div>
				<div class="form-group col-sm-2 pull-right noPaddingRight">
					<label for="selectGender">Gender</label>
					<input type="text" class="form-control" id="selectGender">
				</div>
				<div class="form-group">
					<label for="selectUserName">Username</label>
					<input type="text" class="form-control" id="selectUserName">
				</div>
				<a href="#" class="btn btn-lg btn-block">Edit</a>
			</form>
			
			<h2>Update Password</h2>
			<p>To update your password, we will redirect you to a separate page.</p>
			<a href="#" class="btn btn-lg btn-block">Edit</a>

			<h2>Events</h2>

			<a href="#" class="btn btn-lg btn-block">Create New Event</a>
			<ul>
				<h3>Upcoming Events</h3>
				<li>Oct. 1st, 6 p.m. | Basketball at Woodlawn Park <a href="#" class="btn btn-xs btn-primary">Edit</a></li>
				<li>Oct. 3rd, 7 a.m. | Swimming at San Pedro Springs Park <a href="#" class="btn btn-xs btn-primary">Cancel RSVP</a></li>
				<li>Oct. 5th, 6 p.m. | Golf at Brackenridge <a href="#" class="btn btn-xs btn-primary">Edit</a></li>
			</ul>

			<ul>
				<h3>Past Events</h3>
				<li>Sept. 1st, 4 p.m. | Disc Golf at Trinity</li>
			</ul>
		</div>

	</div>
</div>

@stop