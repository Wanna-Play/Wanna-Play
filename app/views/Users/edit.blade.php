@extends('layouts.master')

@section('Edit User Profile')
Edit User Profile
@stop

@section('content')

	<h1>Edit User Profile: {{$user->id}}</h1>

	{{-- uses token control option below to prevent Cross Site Request Forgery (CSRF) attacks --}}

	{{ Form::model($user, ['method'=>'PUT','action'=>['UsersController@update', $user->id]]) }}

  <section id="signUpForm">

		<h2>Sign Up</h2>

	{{ Form::open(array('action' => 'UsersController@store', 'files'=>true)) }}
	
	{{-- form tied to model by using the same name as in database --}}	

		<div class="form-group col-xs-12 col-sm-6 pull-right">

			<div class="form-group col-sm-6 noPaddingLeft" @if($errors->has('first_name')) has-error @endif>
				{{ Form::label('first_name','First Name:') }}
				{{ Form::text('first_name',null,['class'=>'form-group']) }}
			</div>
			
			<div class="form-group" @if($errors->has('last_name')) has-error @endif>
				{{ Form::label('last_name', 'Last Name') }}
				{{ Form::textarea('last_name', null, ['class'=>'form-group']) }}
			</div>

			<div class="form-group" @if($errors->has('profile_picture')) has-error @endif">
				{{Form::label('profile_picture', 'Profile Picture Title') }}
				{{Form::text('profile_picture') }}         
	    	</div>

	    	<div class="form-group" @if($errors->has('sports')) has-error @endif>
				{{Form::label('sports', 'sports') }}
				{{Form::file('sports') }}         
	   		</div>
			
			<h3><strong>Sports Tags: </strong></h3>
					@foreach($user->sports as $sport)
						{{{ $sport->sport }}}
					@endforeach

		<div class="form-group" @if($errors->has('sports')) has-error @endif"><strong>Sports: </strong>
			<input name="sport_list" id="sports" class="sports" value="{{{ $user->sportString }}}">
		</div>

	<script>

		$(document).ready(function(){
			$('#sports').tagsInput();
		});

	</script>

			<div class="form-group" @if($errors->has('city')) has-error @endif">
				{{Form::label('city', 'Select City') }}
				{{Form::text('city') }}         
	    	</div>

	    	<div class="form-group" @if($errors->has('zip')) has-error @endif">
				{{Form::label('zip', 'Zip Code') }}
				{{Form::text('zip') }}         
	    	</div>
			
			<div class="form-group " @if($errors->has('gender')) has-error @endif>
				{{Form::label('gender','Gender') }}
				{{Form::text('gender') }}
			</div>
			<div class="form-group" @if($errors->has('username')) has-error @endif>
				{{Form::label('username','Username') }}
				{{Form::text('username') }}
			</div>
			<div class="form-group" @if($errors->has('password')) has-error @endif>
				{{Form::label('password','Password') }}
				{{Form::text('password') }}
			</div>
			<div class="form-group" @if($errors->has('reconfirm_password')) has-error @endif>
				{{Form::label('reconfirm_password','Confirm Password') }}
				{{Form::text('reconfirm_password') }}
			</div>

	<button class="btn btn-lg btn-block">Save Edits</button>

	{{ Form::close() }}

@stop

@endsection




