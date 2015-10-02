@extends('layouts.landing')

@section('content')
	
{{-- <div class="container col-sm-12">
	<div class="row" id="homeSelectionForm">
		<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3 transparent_overlay_box">
			<div>
				<h1 class="whiteHeader">GaME On</h1>
				<div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
					<form>
						<div class="form-group">
				            <h2 class="homeHeadLine">What do you like to play?</h2>
				            <div class="dropdown form-group" id="sportDropdown">
				                {{ Form::select('select_sport', $sportDropdown, null, ['class' => 'form-control dropdown-toggle calendarSelect', 'aria-labelledby' => 'sportDropdown']) }}
				            </div>
				        </div>

				        <div class="form-group">
				            <h2 class="homeHeadLine">What city are you in?</h2>
				            <div class="dropdown form-group" id="cityDropdown">
				                {{ Form::select('select_city', $cityDropdown, null, ['class' => 'form-control dropdown-toggle calendarSelect', 'aria-labelledby' => 'cityDropdown']) }}
				            </div>
				        </div>

						
						<div class="col-sm-12 col-md-offset-2 col-md-8 col-md-offset-2">
							<a href="#" class="btn btn-lg btn-block" id="homePageButton">Check the games</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div> --}}




@stop
