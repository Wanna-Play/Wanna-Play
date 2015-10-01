@extends('layouts.master')

@section('title')
<title>Game Events Index Page - displays all events</title>
@stop

@section('content')

<h1>Listing of Game Events</h1>

{{ $game_events->links() }}
 
@foreach($game_events as $gameevent)
	
 <div>
	<h3><strong>Event Name: {{{$gameevent->event_name}}}</strong></h3> 
	{{-- <h3><strong>Event Sport Type {{{$gameevent->sport_id}}}</strong></h3> --}}
	<h3><strong>Gender: {{{$gameevent->gender}}}</strong></h3>
	<h3><strong>Skill Level: {{{$gameevent->skill_level}}}</strong></h3>  
	<h5><strong>Price: </strong>{{{number_format($gameevent->amount, 2) }}}</h5>
	<h5><strong>Description: </strong>{{{Str::words($gameevent->description, 20) }}}</h5>

	<h5><strong>Start Time: </strong>{{$gameevent->start_time}}</h5>

	<h5><strong>End Time: </strong>{{$gameevent->end_time}}</h5>

	{{-- TO DO: ADD TAGS TO INDEX PAGE --}}

		{{-- <h5><strong>Calendar Event Tags: </strong>

			@foreach($calendarevent->tags as $tag)
				{{{ $tag->name }}}
			@endforeach
		 </h5> --}}

<a href="{{{action('GameEventsController@show', $gamevent->id)}}}">View Game Event</a>

</div>


@stop


@section('script')



@stop