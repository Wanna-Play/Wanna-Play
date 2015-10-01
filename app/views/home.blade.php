@extends('layouts.landing')

@section('content')

	<div class="container col-sm-12">
		<div class="row" id="homeSelectionForm">
			<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
				<h1 class="homeHeadLine whiteHeader">LookinG For a GaME?</h1>
				<form>
					<div class="form-group">
			            <label for="selectSport" class="homeHeadLine"><h2>What do you like to play?</h2></label>
			            <div class="dropdown form-group" id="sportDropdown">
			                {{ Form::select('select_sport', $sportDropdown, null, ['class' => 'form-control dropdown-toggle calendarSelect', 'aria-labelledby' => 'sportDropdown']) }}
			            </div>
			        </div>

			        <div class="form-group">
			            <label for="selectCity" class="homeHeadLine"><h2>What city are you in?</h2></label>
			            <div class="dropdown form-group" id="cityDropdown">
			                {{ Form::select('select_city', $cityDropdown, null, ['class' => 'form-control dropdown-toggle calendarSelect', 'aria-labelledby' => 'cityDropdown']) }}
			            </div>
			        </div>

					
					<div class="col-sm-offset-2 col-sm-8">
						<a href="#" class="btn btn-lg btn-block">Check the games</a>
					</div>
				</form>
			</div>
		</div>
	</div>


@stop
