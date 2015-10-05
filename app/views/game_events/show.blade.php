@extends('layouts.master')

@section('content')
<div class="col-xs-12">
	<div id="showEvent">

		<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-sm-offset-1 col-md-offset-2 col-md-8 col-md-offset-2 pull-left">
        	<h1>{{{$event->event_name}}}</h1>
        	<h2><small>Starts at: {{$event->start_time}} / Ends at: {{$event->end_time}}</small></h2>

			{{-- TO DO: ADD event image - make it conditional, if images then go to foreach; otherwise show post without images --}}
			{{--@foreach($post->images as $image)
					<img class="media-object" src="{{{$event->event_image}}}">
				@endforeach
		 	--}}


			<img class="media media-object" src="{{{$event->event_image}}}">

			{{-- add sport tags using jQuery plugin tagsinput --}}
			<div class="row">
				<div class="col-sm-3">
					<label>Sport:</label>
					<p>{{{$event->sport->sport}}}</p>
				</div>	

				<div class="col-sm-3">
					<label>Skill Level:</label> 
					<p>{{{$event->skill_level}}}</p>
				</div>

				<div class="col-sm-3">
					<label>Gender:</label> 
					<p>{{{$event->gender}}}</p>
				</div>

				<div class="col-sm-3">
					<label>Price:</label>
					<p>${{{number_format($event->amount, 2) }}}<p>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<label>Description:</label> 
					<p>{{{Str::words($event->description, 20) }}}</p>
				</div>

				<div class="col-sm-12">
					<label>Event Created:</label> 
					<p>{{$event->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</p>
				</div>
			</div>
				{{-- These buttons are visible to event organizer after logging in --}}
				<a href="{{{action('GameEventsController@edit',$event->id)}}}" class="btn btn-result media">Edit Event</a>

				<button id="delete" class="btn btn-delete media">Delete Event</button>

				{{ Form::open(array('action' => array('GameEventsController@destroy', $event->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
				{{ Form::close() }}
				{{--  --}}
				
				{{-- These buttons are visible to people who are not logged in yet or those who are logged in and have not yet RSVP'd --}}
				<a href="#" class="btn btn-result media">RSVP for Event</a> <a href="#" class="btn btn-result media">Contact Organizer</a>

				<br>

				{{-- These buttons are visible to people who have logged in and RSVP'd --}}
				<a href="#" class="btn btn-result media">Cancel RSVP</a> <a href="#" class="btn btn-result media">Contact Organizer</a>
			</div>
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