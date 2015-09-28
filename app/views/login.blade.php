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
			
				<div class="form-group form-control col-sm-6 noPaddingLeft" @if($errors->has('title')) has-error @endif>
					{{Form::label('firstName','First Name') }}
					{{Form::text('firstName') }}
				</div>
				<div class="form-group col-sm-6 noPaddingLeft noPaddingRight" @if($errors->has('lastName')) has-error @endif>
					{{Form::label('lastName','Last Name') }}
					{{Form::text('lastName') }}
				</div>

				<div class="form-group sports" @if($errors->has('sports')) has-error @endif><strong>Favorite Sports: </strong>
				<input name="sports" id="sports" class="sports" value="">
				</div>


<script>

$(document).ready(function(){
	// $('#sports').addTag('');
	$('#sports').tagsInput();	
});

</script>

				<div class="form-group col-sm-6 pull-left noPaddingLeft" @if($errors->has('lastName')) has-error @endif>
					{{Form::label('selectCity','City') }}
					{{Form::text('selectCity') }}
				</div>
				<div class="form-group col-sm-4 noPaddingLeft noPaddingRight" @if($errors->has('zipCode')) has-error @endif>
					{{Form::label('zipCode','ZIP Code') }}
					{{Form::text('zipCode') }}
				</div>
				<div class="form-group col-sm-2 pull-right noPaddingRight" @if($errors->has('Gender')) has-error @endif>
					{{Form::label('selectGender','Gender') }}
					{{Form::text('selectGender') }}
				</div>
				<div class="form-group" @if($errors->has('Username')) has-error @endif>
					{{Form::label('selectUserName','Username') }}
					{{Form::text('selectUserName') }}
				</div>
				<div class="form-group" @if($errors->has('Password')) has-error @endif>
					{{Form::label('selectPassword','Password') }}
					{{Form::text('selectPassword') }}
				</div>
				<div class="form-group" @if($errors->has('reTypePassword')) has-error @endif>
					{{Form::label('reTypePassword','Enter Password Again') }}
					{{Form::text('reTypePassword') }}
				</div>

		<div class="form-group">
		    {{ Form::submit('Save New Post', 
		      array('class'=>'btn btn-lg btn-block')) }}
		</div>
				{{-- <a href="{{{ action('HomeController@showDashboard') }}}" class="btn btn-lg btn-block">Submit</a> --}}	

	{{ Form::close() }}

		</div>
	</section>
</div>

@stop