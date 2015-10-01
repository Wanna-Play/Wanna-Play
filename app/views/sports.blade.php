@extends('layouts.master')

@section('content')
<div class="col-xs-12">
	<div id="createEvent">
		<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-sm-offset-1 col-md-offset-2 col-md-8 col-md-offset-2 pull-left">
			<h2>Sports</h2>

			<ul>
			{{-- This is where we'll have the list of all the sports outputted. I tried but couldn't get the output to work using @foreach $user->sport as $sport. Please wrap the foreach function around the li below. --}}
				<li></li>
			</ul>

		</div>
	</div>
</div>

@stop