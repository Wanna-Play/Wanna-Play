@extends('layouts.master')

@section('title')
<title>Game Events Index Page - displays all events</title>
@stop

@section('content')

<h1>Listing of Game Events</h1>
{{-- passing in events from GameEventsController Index method; links paginates --}}
	{{ $events->links() }}


	@foreach($events as $gameevent)

		<h3><strong>Event Name: {{{$gameevent->event_name}}}</strong></h3>
		{{-- add sport tags using jQuery plugin tagsinput --}}
		{{-- <h3><strong>Sport Type: {{{$gameevent->sport->sport}}}</strong></h3> --}}
		<h3><strong>Gender: {{{$gameevent->gender}}}</strong></h3>
		<h3><strong>Skill Level: {{{$gameevent->skill_level}}}</strong></h3>
		<h5><strong>Price: </strong>{{{number_format($gameevent->amount, 2) }}}</h5>
		<h5><strong>Description: </strong>{{{Str::words($gameevent->description, 20) }}}</h5>

		<h5><strong>Start Time: </strong>{{$gameevent->start_time}}</h5>

		<h5><strong>End Time: </strong>{{$gameevent->end_time}}</h5>



<a href="{{{action('GameEventsController@show', $gameevent->id)}}}">View Game Event</a>
@endforeach

{{-- <div class="container-fluid">
	<div class="row">
		<h1 class="page-header noHeaderSpace">Search Results</h1>

	    <div class="col-sm-3 col-md-2 sidebar">
			<div class="nav nav-sidebar">
				<h4>Refine Results</h4>
				<div class="row">
					<div class="row">
						<div class="col-sm-12">
							<form class="form-inline">
								<div class="form-group">
									<label for="sportResults">Sport</label>
									<div class="input-group">
								  		<div class="input-group-addon"><input type="checkbox"></div>
								  		<input type="text" class="form-control" id="sportResults">
									</div>
								</div>

								<div class="form-group updateResultsSubmit">
									<label for="sportResults">City</label>
									<div class="input-group">
								  		<div class="input-group-addon"><input type="checkbox"></div>
								  		<input type="text" class="form-control" id="sportResults">
									</div>
								</div>

								<div class="form-group updateResultsSubmit">
									<label for="sportResults">Gender</label>
									<div class="input-group">
								  		<div class="input-group-addon"><input type="checkbox"></div>
								  		<input type="text" class="form-control" id="sportResults">
									</div>
								</div>

								<div class="form-group updateResultsSubmit">
									<label for="sportResults">Skill Level</label>
									<div class="input-group">
								  		<div class="input-group-addon"><input type="checkbox"></div>
								  		<input type="text" class="form-control" id="sportResults">
									</div>
								</div>

								<div class="form-group updateResultsSubmit">
									<label for="sportResults">Start Date</label>
									<div class="input-group">
								  		<div class="input-group-addon"><input type="checkbox"></div>
								  		<input type="text" class="form-control" id="sportResults">
									</div>
								</div>

								<div class="form-group updateResultsSubmit">
									<label for="sportResults">End Date</label>
									<div class="input-group">
								  		<div class="input-group-addon"><input type="checkbox"></div>
								  		<input type="text" class="form-control" id="sportResults">
									</div>
								</div>

								<div class="form-group updateResultsSubmit">
									<label for="sportResults">ZIP Code</label>
									<div class="input-group">
								  		<div class="input-group-addon"><input type="checkbox"></div>
								  		<input type="text" class="form-control" id="sportResults">
									</div>
								</div>

								<button type="submit" class="btn btn-block updateResultsSubmit">Update results</button>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="nav nav-sidebar">
				<a href="">View Archived Events</a>
			</div>
	    </div>
	    <div class="col-sm-9 col-md-10 main">

	    	<h2 class="sub-header noHeaderSpace">Today</h2>
	    	<div class="media">
				<div class="media-left">
					<a href="#">
					  <img class="media-object" src="https://placeholdit.imgix.net/~text?txtsize=23&txt=80%C3%9780&w=80&h=80" alt="...">
					</a>
				</div>
				<div class="media-body">
					<h3 class="noHeaderSpace">Baseball at Brackenridge Park Baseball at Brackenridge Park</h3>
						<p>123 Broadway St., San Antonio, TX 78209</p>
						<p>Starts at: 6 p.m. | Ends at 8 p.m.</p>
						<p>Gender: Mixed | Skill Level: Beginner</p>
						<p><a href="#" class="btn btn-primary" role="button">See More</a></p>
				</div>
			</div>

			<div class="media">
				<div class="media-left">
					<a href="#">
					  <img class="media-object" src="https://placeholdit.imgix.net/~text?txtsize=23&txt=80%C3%9780&w=80&h=80" alt="...">
					</a>
				</div>
				<div class="media-body">
					<h3 class="noHeaderSpace">Baseball at Brackenridge Park Baseball at Brackenridge Park</h3>
						<p>123 Broadway St., San Antonio, TX 78209</p>
						<p>Starts at: 6 p.m. | Ends at 8 p.m.</p>
						<p>Gender: Mixed | Skill Level: Beginner</p>
						<p><a href="#" class="btn btn-primary" role="button">See More</a></p>
				</div>
			</div>

			<h2 class="sub-header noHeaderSpace">Oct. 1st</h2>
	    	<div class="media">
				<div class="media-left">
					<a href="#">
					  <img class="media-object" src="https://placeholdit.imgix.net/~text?txtsize=23&txt=80%C3%9780&w=80&h=80" alt="...">
					</a>
				</div>
				<div class="media-body">
					<h3 class="noHeaderSpace">Baseball at Brackenridge Park Baseball at Brackenridge Park</h3>
						<p>123 Broadway St., San Antonio, TX 78209</p>
						<p>Starts at: 6 p.m. | Ends at 8 p.m.</p>
						<p>Gender: Mixed | Skill Level: Beginner</p>
						<p><a href="#" class="btn btn-primary" role="button">See More</a></p>
				</div>
			</div>

			<div class="media">
				<div class="media-left">
					<a href="#">
					  <img class="media-object" src="https://placeholdit.imgix.net/~text?txtsize=23&txt=80%C3%9780&w=80&h=80" alt="...">
					</a>
				</div>
				<div class="media-body">
					<h3 class="noHeaderSpace">Baseball at Brackenridge Park Baseball at Brackenridge Park</h3>
						<p>123 Broadway St., San Antonio, TX 78209</p>
						<p>Starts at: 6 p.m. | Ends at 8 p.m.</p>
						<p>Gender: Mixed | Skill Level: Beginner</p>
						<p><a href="#" class="btn btn-primary" role="button">See More</a></p>
				</div>
			</div>


			<h2 class="sub-header noHeaderSpace">Oct. 15th</h2>
	    	<div class="media">
				<div class="media-left">
					<a href="#">
					  <img class="media-object" src="https://placeholdit.imgix.net/~text?txtsize=23&txt=80%C3%9780&w=80&h=80" alt="...">
					</a>
				</div>
				<div class="media-body">
					<h3 class="noHeaderSpace">Baseball at Brackenridge Park Baseball at Brackenridge Park</h3>
						<p>123 Broadway St., San Antonio, TX 78209</p>
						<p>Starts at: 6 p.m. | Ends at 8 p.m.</p>
						<p>Gender: Mixed | Skill Level: Beginner</p>
						<p><a href="#" class="btn btn-primary" role="button">See More</a></p>
				</div>
			</div>

			<div class="media">
				<div class="media-left">
					<a href="#">
					  <img class="media-object" src="https://placeholdit.imgix.net/~text?txtsize=23&txt=80%C3%9780&w=80&h=80" alt="...">
					</a>
				</div>
				<div class="media-body">
					<h3 class="noHeaderSpace">Baseball at Brackenridge Park Baseball at Brackenridge Park</h3>
						<p>123 Broadway St., San Antonio, TX 78209</p>
						<p>Starts at: 6 p.m. | Ends at 8 p.m.</p>
						<p>Gender: Mixed | Skill Level: Beginner</p>
						<p><a href="#" class="btn btn-primary" role="button">See More</a></p>
				</div>
			</div>


	    </div>
	</div>
</div> --}}



@stop

@section('script')

@stop
