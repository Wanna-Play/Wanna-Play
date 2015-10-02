@extends('layouts.master')

@section('content')

<title>Event Show Page</title>

<div class = "container col-sm-12">

	{{-- TO DO: ADD event imagge - make it conditional, if images then go to foreach; otherwise show post without images --}}
	{{-- <div row>
		<div class = "col-sm-4 showImage">
			@foreach($post->images as $image)
				<img class = "postImage" src="{{ '/' . $image->url }}">
			@endforeach
		</div>
 --}}

	<div class = "col-sm-8">
			
		<h3><strong>Event Name: {{{$event->event_name}}}</strong></h3>

		{{-- add sport tags using jQuery plugin tagsinput --}}
		<h3><strong>Sport Type: {{{$event->sport->sport}}}</strong></h3>

		<h3><strong>Gender: {{{$event->gender}}}</strong></h3>

		<h3><strong>Skill Level: {{{$event->skill_level}}}</strong></h3>

		<h5><strong>Price: </strong>{{{number_format($event->amount, 2) }}}</h5>

		<h5><strong>Description: </strong>{{{Str::words($event->description, 20) }}}</h5>

		<h5><strong>Start Time: </strong>{{$event->start_time}}</h5>

		<h5><strong>End Time: </strong>{{$event->end_time}}</h5>

		<h3><strong>Event Created: </strong>{{$event->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</h3>

	
 	<p></p>
	<a href="{{{action('GameEventsController@edit',$event->id)}}}" class="btn btn-default">Edit Event<span class = "glyphicon glyphicon-pencil"></span></a>

	<button id="delete" class="btn btn-danger">Delete Event<span class = "glyphicon glyphicon-trash"></span></button>

	{{ Form::open(array('action' => array('GameEventsController@destroy', $event->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
	{{ Form::close() }}
	
	{{-- <a href="#" class="btn btn-primary">Edit Event</a> --}}

	<p><a href="#" class="btn btn-primary">RSVP for Event</a> <a href="#" class="btn btn-primary">Contact Organizer</a></p>

	<p><a href="#" class="btn btn-primary">Cancel RSVP</a> <a href="#" class="btn btn-primary">Contact Organizer</a></p>

		</div>
		</div>
	</div>

	<script type="text/javascript">
		"use strict";

		$('#delete').on('click', function(){

			var onConfirm = confirm('Are you sure you want to delete this event? There is no turning back!');

			if(onConfirm) {
				$('#formDelete').submit();
			}
		});

	</script>

@stop

<script>
  /*add Google Analytics*/
</script>

</script>




@stop