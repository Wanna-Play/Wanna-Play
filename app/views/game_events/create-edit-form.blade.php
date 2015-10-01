
        {{ Form::token() }}

        <div class="form-group">
            {{ Form::label('select_sport', 'Select Sport') }}<br>
            <div class="dropdown form-group" id="sportDropdown">
                {{ Form::select('select_sport', $sportDropdown, null, ['class' => 'form-control dropdown-toggle calendarSelect', 'aria-labelledby' => 'sportDropdown']) }}
            </div>
        </div>


        <div class="form-group @if($errors->has('event_name')) has-error @endif">
            {{ Form::label('event_name', 'Event Name') }}
            {{ Form::text('event_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Your Event\'s Name']) }}
        </div>

        <div class="row">
            <div class="form-group col-sm-6 @if($errors->has('date')) has-error @endif">
                {{ Form::label('start_time', 'Select Start Time/Date') }}
                {{ Form::text('start_time', null, ['class' => 'form-control calendarSelect', 'id' => 'startsAtDateTimePicker', 'placeholder' => 'Select a Starting Time/Date']) }}
            </div>
            <div class="form-group col-sm-6 ">
                {{ Form::label('end_time', 'Select End Time/Date') }}
                {{ Form::text('end_time', null, ['class' => 'form-control calendarSelect', 'id' => 'endsAtDateTimePicker', 'placeholder' => 'Select an Ending Time/Date']) }}
            </div>
        </div>

		<div class="form-group" id="location-name">
            {{ Form::label('location_name', 'Venue Name') }}
			{{ Form::text('location_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Your Event\'s Venue Name']) }}
		</div>

		<div class="form-group" id="location-street">
            {{ Form::label('location_street', 'Street Address') }}
			{{ Form::text('location_street', null, ['class' => 'form-control', 'placeholder' => 'Venue\'s Street Address']) }}
		</div>

    	<div class="row">
    		<div class="form-group col-sm-8" id="location-city">
                {{ Form::label('location_city', 'City') }}
    			{{ Form::text('location_city', null, ['class' => 'form-control', 'placeholder' => 'Venue\'s City']) }}
    		</div>

            <div class="form-group col-sm-4" id="location-zip">
                {{ Form::label('location_zip', 'Zip') }}
                {{ Form::number('location_zip', null, ['class' => 'form-control', 'placeholder' => 'Venue\'s ZIP']) }}
            </div>
        </div>


        <div class="row">
            <div class="form-group col-sm-3">
                {{ Form::label('cost', 'Price') }}
                <div class="input-group">
                    <span class="input-group-addon">$</span>

                {{ Form::text('cost', null, ['class' => 'form-control', 'placeholder' => 'Price Per Player']) }}
                </div>
            </div>

            <div class="form-group col-sm-6">
                {{ Form::label('select_skill_level', 'Skill Level') }}
                <div class="dropdown form-group" id="location">
                    {{ Form::select('select_skill_level', ['' => 'Select Skill Level', 'beginner' => 'Beginner', 'intermediate' => 'Intermediate', 'advanced' => 'Advanced'], null, ['class' => 'form-control dropdown-toggle btn btn-default' ]) }}
                </div>
            </div>

            <div class="form-group col-sm-3">
                {{ Form::label('select_gender', 'Gender') }}
                <div class="dropdown form-group" id="location">
                    {{ Form::select('select_gender', ['' => 'Select Gender', 'M' => 'Male', 'F' => 'Female', 'Co-Ed' => 'Co-Ed'], null, ['class' => 'form-control dropdown-toggle btn btn-default' ]) }}
                </div>
            </div>
        </div>


        <div class="form-group @if($errors->has('description')) has-error @endif">
            {{ Form::label('enter_description', 'Description') }}
            {{ Form::textarea('enter_description', null, ['class' => 'form-control', 'placeholder' => 'Enter a Description for Your Event']) }}
        </div>

        <div class="form-group">
            {{ Form::label('event_image', 'Upload an Image') }}
            {{ Form::file('event_image', ['class' => 'form-control']) }}
        </div>
