@extends('layouts.master')

@section('content')
<div class="col-xs-12">
	<div id="createEvent">
		<div class="col-xs-12 col-sm-9 pull-left">
			<form>
				<h2>Create an Event</h2>
				<h3>Sport and Title</h3>
				<div class="form-group">
					<label for="">Sport</label>
					<input type="text" class="form-control" id="">
				</div>
				<div class="form-group">
					<label for="">Event name</label>
					<input type="text" class="form-control" id="">
				</div>
				<h3>Start and End Times</h3>
				<div class="form-group">
					<label for="">Starts at</label>
					<input type="text" class="form-control" id="">
				</div>
				<div class="form-group">
					<label for="">Ends at</label>
					<input type="text" class="form-control" id="">
				</div>
				<h3>Location Information</h3>
				<div class="form-group">
					<label for="">Location name</label>
					<input type="text" class="form-control" id="">
				</div>
				<div class="form-group">
					<label for="">Address</label>
					<input type="text" class="form-control" id="">
				</div>
				<div class="form-group">
					<label for="">City</label>
					<input type="text" class="form-control" id="">
				</div>
				<div class="form-group">
					<label for="">ZIP</label>
					<input type="text" class="form-control" id="">
				</div>
				<div class="form-group">
					<label for="">Phone</label>
					<input type="text" class="form-control" id="">
				</div>
				<div class="form-group">
					<label for="">URL</label>
					<input type="text" class="form-control" id="">
				</div>
				<h3>About the Event</h3>
				<div class="form-group">
					<label for="">Description</label>
					<input type="text" class="form-control" id="">
				</div>

				<h3>Admission</h3>
				<ul>
					<li>Free</li>
					<li>Pay to play</li>
				</ul>

				<h3>Skill Level</h3>
				<ul>
					<li>Beginner</li>
					<li>Advanced</li>
					<li>Expert</li>
				</ul>

				<h3>Gender</h3>
				<ul>
					<li>Mixed</li>
					<li>Female</li>
					<li>Male</li>
				</ul>

				<h3>Image Upload (optional)</h3>
				<a href="#" class="btn btn-block">Upload</a>

				<h3>Contact</h3>
				<p>Organizers agree to be contacted by players who register for the event and have questions related to the event.</p>
				<ul>
					<li>Check box to agree and complete your Event</li>
				</ul>

				<a href="#" class="btn btn-lg btn-block">Submit</a>
			</form>
			
			
		</div>

	</div>

</div>

@stop