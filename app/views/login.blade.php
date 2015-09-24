@extends('layouts.master')

@section('content')
<div class="col-xs-12">
	<section id="loginForm">
		<div class="col-xs-12 col-sm-6 pull-left">
			<form>
				<h2>Log In</h2>
				<div class="form-group">
					<label for="loginUserName">Username </label>
					<input type="text" class="form-control" id="loginUserName">
				</div>
				<div class="form-group">
					<label for="loginPassword">Password </label>
					<input type="password" class="form-control" id="loginPassword">
				</div>
				<a href="#" class="btn btn-lg btn-block">Log In</a>
			</form>
		</div>
	</section>

	<section id="signUpForm">
		<div class="col-xs-12 col-sm-6 pull-right">
			<form>
				<h2>Sign Up</h2>
				<div class="form-group col-sm-6 noPaddingLeft">
					<label for="firstName">First name</label>
					<input type="text" class="form-control" id="firstName">
				</div>
				<div class="form-group col-sm-6 noPaddingLeft noPaddingRight">
					<label for="lastName">Last name</label>
					<input type="text" class="form-control" id="lastName">
				</div>
				<div class="form-group">
					<label for="faveSports">Favorite sports</label>
					<input type="text" class="form-control" id="faveSports">
				</div>
				<div class="form-group col-sm-6 pull-left noPaddingLeft">
					<label for="selectCity">City</label>
					<input type="text" class="form-control" id="selectCity">
				</div>
				<div class="form-group col-sm-4 noPaddingLeft noPaddingRight">
					<label for="zipCode">ZIP code</label>
					<input type="text" class="form-control" id="zipCode">
				</div>
				<div class="form-group col-sm-2 pull-right noPaddingRight">
					<label for="selectGender">Gender</label>
					<input type="text" class="form-control" id="selectGender">
				</div>
				<div class="form-group">
					<label for="selectUserName">Username</label>
					<input type="text" class="form-control" id="selectUserName">
				</div>
				<div class="form-group">
					<label for="selectPassword">Password</label>
					<input type="password" class="form-control" id="selectPassword">
				</div>
				<div class="form-group">
					<label for="reTypePassword">Retype Password</label>
					<input type="password" class="form-control" id="reTypePassword">
				</div>
				<a href="#" class="btn btn-lg btn-block">Submit</a>
			</form>
		</div>
	</section>
</div>

@stop