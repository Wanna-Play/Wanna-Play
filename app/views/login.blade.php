@extends('layouts.master')

@section('content')
<div class="col-xs-12">
	<section id="loginForm">
		<div class="col-xs-12 col-sm-6 pull-left">
				<h2>Log In</h2>
				<div class="form-group">
					<label for="loginUserName">Username </label>
					<input type="text" class="form-control" id="loginUserName">
				</div>
				<div class="form-group">
					<label for="loginPassword">Password </label>
					<input type="password" class="form-control" id="loginPassword">
				</div>
				<a href="{{{ action('HomeController@showDashboard') }}}" class="btn btn-lg btn-block">Log In</a>
			</form>
		</div>
	</section>

	<section id="signUpForm">
		<h2>Sign Up</h2>
	{{ Form::open(array('action' => 'UsersController@store', 'files'=>true)) }}
		
		<div class="form-group col-xs-12 col-sm-6 pull-right">
			
				<div class="form-group form-control col-sm-6 noPaddingLeft" @if($errors->has('first_name')) has-error @endif>
					{{Form::label('first_name','First Name') }}
					{{Form::text('first_name') }}
				</div>
				<div class="form-group col-sm-6 noPaddingLeft noPaddingRight" @if($errors->has('last_name')) has-error @endif>
					{{Form::label('last_name','Last Name') }}
					{{Form::text('last_name') }}
				</div>

				<div class="form-group sports" @if($errors->has('sports')) has-error @endif><strong>Favorite Sports: </strong>
				<input name="sports" id="sports" class="sports" value="">
				</div>

	{{-- jQuery tagsInput plugin script --}}
	<script>

	$(document).ready(function(){
		
		$('#sports').tagsInput();	
	});

	</script>

				<div class="form-group col-sm-6 pull-left noPaddingLeft" @if($errors->has('city')) has-error @endif>
					{{Form::label('city','City') }}
					{{Form::text('city') }}
				</div>
				<div class="form-group col-sm-4 noPaddingLeft noPaddingRight" @if($errors->has('zip')) has-error @endif>
					{{Form::label('zip','ZIP Code') }}
					{{Form::number('zip') }}
				</div>
				<div class="form-group col-sm-2 pull-right noPaddingRight" @if($errors->has('gender')) has-error @endif>
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
				<div class="form-group" @if($errors->has('password_confirmation')) has-error @endif>
					{{Form::label('password_confirmation','Confirm Password') }}
					{{Form::text('password_confirmation') }}
				</div>

		<div class="form-group">
		    {{ Form::submit('Save New Post', 
		      array('class'=>'btn btn-lg btn-block')) }}
		</div>

	{{ Form::close() }}

		</div>
	</section>
</div>

@stop