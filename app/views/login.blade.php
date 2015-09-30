@extends('layouts.master')

@section('content')
<div class="col-xs-12">
	<section id="loginForm">
		<div class="col-xs-12 col-sm-6 pull-left">
			{{ Form::open(array('action' => 'UsersController@doLogin', 'files'=>true)) }}
			<h2>Log In</h2>
			<div class="form-group" @if($errors->has('loginUserName')) has-error @endif>
				{{ Form::label('loginUserName','Username / Email') }}
				{{ Form::text('loginUserName', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group" @if($errors->has('loginPassword')) has-error @endif>
				{{ Form::label('loginPassword','Password') }}
				{{ Form::password('loginPassword', ['class' => 'form-control']) }}
			</div>

			<div class="form-group col-xs-12 col-sm-offset-3 col-sm-6 col-sm-offset-3 media">
			    {{ Form::submit('Log In', ['class'=>'btn btn-lg btn-block']) }}
			</div>

			{{ Form::close() }}
		</div>
	</section>

	<section id="signUpForm">

		<div class="form-group col-xs-12 col-sm-6 pull-right">
			{{ Form::open(array('action' => 'UsersController@store', 'files'=>true)) }}
				<h2>Sign Up</h2>
				@include('users.users-create-edit-form')

				<div class="form-group" @if($errors->has('password')) has-error @endif>
					{{ Form::label('password','Password') }}
					{{ Form::password('password', ['class' => 'form-control']) }}
				</div>
				<div class="form-group" @if($errors->has('password_confirmation')) has-error @endif>
					{{ Form::label('password_confirmation','Confirm Password') }}
					{{ Form::password('password_confirmation', ['class' => 'form-control']) }}
				</div>

				<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3 media">
					{{ Form::button('Sign Up', array('class' => 'btn btn-lg btn-block', 'type' => 'submit')) }}
				</div>
			{{ Form::close() }}
		</div>

	</section>
</div>

@stop


@section('script')

{{-- jQuery tagsInput plugin script --}}
<script>

$(document).ready(function(){

	$('#sports').tagsInput();
});

</script>

@stop
