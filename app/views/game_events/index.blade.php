@extends('layouts.master')

@section('title')
<title>Game Events Index Page - displays all events</title>
@stop

@section('content')

<div class="container-fluid">
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
								  		<div class="input-group-addon"><input type="checkbox" checked="checked"></div>
								  		<input type="text" class="form-control" id="sportResults" value="Soccer">
									</div>
								</div>

								<div class="form-group updateResultsSubmit">
									<label for="sportResults">City</label>
									<div class="input-group">
								  		<div class="input-group-addon"><input type="checkbox" checked="checked"></div>
								  		<input type="text" class="form-control" id="sportResults" value="San Antonio">
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

								<button type="submit" class="btn btn-block updateResultsSubmit media">Update results</button>
							</form>
						</div>
					</div>
				</div>
			</div>
	    </div>
	    <div class="col-sm-9 col-md-10 main">

			{{ $events->links() }}

			@foreach($events as $event)
	    	<h2 class="sub-header noHeaderSpace">{{$event->start_time}}</h2> {{-- Need this start time formatted like: ->format('l, F jS Y') --}}
	    	<div class="media">
				<div class="media-left">
					<a href="{{{action('GameEventsController@show', $event->id)}}}">
						<img class="media-object" src="{{{$event->event_image}}}" style="height: 80px; width: 80px;">
					</a>
				</div>
				<div class="media-body">
					<h3 class="noHeaderSpace">{{{$event->event_name}}}</h3>
						<p>{{ "{$event->location->name_of_location}, {$event->location->address}, {$event->location->city}, {$event->location->zip}" }}</p>
						 {{-- Need to get addresses for events from database --}}
						<p>Starts at: {{$event->start_time}} | Ends at: {{$event->end_time}}</p> {{-- Need start and end times formatted like: ->format('h:i:s A') --}}
						<p>Gender: {{{$event->gender}}} | Skill Level: {{{$event->skill_level}}}</p>
						<p><a href="{{{action('GameEventsController@show', $event->id)}}}" class="btn btn-result" role="button">See More</a></p>
				</div>
			</div>
			@endforeach

	    </div>
	</div>
</div>



@stop

@section('script')

@stop
