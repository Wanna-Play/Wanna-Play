@extends('layouts.landing')

@section('content')

	<div class="container col-sm-12">
		<div class="row" id="homeSelectionForm">
			<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
				<h1 class="homeHeadLine whiteHeader">yOU GOT GaME?</h1>
				<form>
					<div class="form-group">
						<label for="selectSport" class="homeHeadLine"><h2>What do you like to play?</h2></label>
						<select multiple class="form-control">
							<option>Basketball</option>
							<option>Bowling</option>
							<option>Disc Golf</option>
							<option>Football</option>
							<option>Soccer</option>
						</select>
					</div>

					<div class="form-group">
						<label for="selectCity" class="homeHeadLine"><h2>What city are you in?</h2></label>
						<select multiple class="form-control">
							<option>Austin</option>
							<option>Dallas / Fort Worth</option>
							<option>Houston</option>
							<option>San Antonio</option>
							<option>El Paso</option>
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
