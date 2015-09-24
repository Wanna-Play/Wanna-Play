@extends('layouts.landing')

@section('content')

	<div class="container col-sm-12">
		<div class="row" id="homeSelectionForm">
			<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
				<h1>YOU GOT GAME?</h1>
				<form>
					<div class="form-group">
						<label for="selectSport"><h2>What do you like to play?</h2></label>
						<select multiple class="form-control">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>

					<div class="form-group">
						<label for="selectCity"><h2>What city are you in?</h2></label>
						<select multiple class="form-control">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>

					<div class="col-sm-offset-2 col-sm-8">
						<a href="#" class="btn btn-lg btn-block">Check the games</a>
					</div>
				</form>
			</div>
		</div>
	</div>


@stop
