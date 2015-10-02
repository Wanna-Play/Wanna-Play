
        {{ Form::token() }}


        <div class="form-group" @if($errors->has('event_name')) has-error @endif>
            {{ Form::label('event_name', 'Event Name') }}
            {{ Form::text('event_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Your Event\'s Name']) }}
        </div>
        
        <div class="form-group">
            {{ Form::label('select_sport', 'Select Sport') }}<br>
            <div class="dropdown form-group" id="select_sport">
                {{ Form::select('select_sport', $sportDropdown, null, ['class' => 'form-control dropdown-toggle calendarSelect', 'aria-labelledby' => 'sportDropdown']) }}
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-6" @if($errors->has('date')) has-error @endif>
                {{ Form::label('start_time', 'Select Start Time/Date') }}
                {{ Form::text('start_time', null, ['class' => 'form-control calendarSelect', 'id' => 'startsAtDateTimePicker', 'placeholder' => 'Select a Starting Time/Date']) }}
        </div>

        <div class="form-group col-sm-6" @if($errors->has('end_time')) has-error @endif>
                {{ Form::label('end_time', 'Select End Time/Date') }}
                {{ Form::text('end_time', null, ['class' => 'form-control calendarSelect', 'id' => 'endsAtDateTimePicker', 'placeholder' => 'Select an Ending Time/Date']) }}
        </div>

		<div class="form-group" id="name_of_location" @if($errors->has('date')) has-error @endif>
            {{ Form::label('name_of_location', 'Venue Name') }}
			{{ Form::text('name_of_location', null, ['class' => 'form-control', 'placeholder' => 'Enter Your Event\'s Venue Name']) }}
		</div>

		<div class="form-group" id="address" @if($errors->has('address')) has-error @endif>
            {{ Form::label('address', 'Street Address') }}
			{{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Venue\'s Street Address']) }}
		</div>

    	<div class="row">
    		<div class="form-group col-sm-8" id="city" @if($errors->has('city')) has-error @endif>
                {{ Form::label('city', 'City') }}
    			{{ Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Venue\'s City']) }}
    	</div>

        <div class="form-group col-sm-4" id="zip" @if($errors->has('zip')) has-error @endif>
                {{ Form::label('zip', 'Zip') }}
                {{ Form::number('zip', null, ['class' => 'form-control', 'placeholder' => 'Venue\'s ZIP']) }}
        </div>

      <div class="form-group col-sm-4" id="phone" @if($errors->has('phone')) has-error @endif>
                {{ Form::label('phone', 'Phone') }}
                {{ Form::number('phone', null, ['class' => 'form-control', 'placeholder' => 'Venue\'s Phone']) }}
        </div>


        <div class="row">
            <div class="form-group col-sm-3" @if($errors->has('amount')) has-error @endif>
                {{ Form::label('amount', 'Cost') }}
                <div class="input-group">
                    <span class="input-group-addon">$</span>

                {{ Form::text('amount', null, ['class' => 'form-control', 'placeholder' => 'Price Per Player']) }}
                </div>
            </div>

         <div class="form-group col-sm-3" @if($errors->has('skill_level')) has-error @endif>
                {{ Form::label('select_skill_level', 'Skill Level') }}
                <div class="dropdown form-group" id="skill_level">
                    {{ Form::select('select_skill_level', ['' => 'Select Skill Level', 'Beginner' => 'Beginner', 'Intermediate' => 'Intermediate', 'Advanced' => 'Advanced', 'Any' => 'Any'], null, ['class' => 'form-control dropdown-toggle btn btn-default' ]) }}
                </div>
            </div>

            <div class="form-group col-sm-3" @if($errors->has('gender')) has-error @endif>
                {{ Form::label('select_gender', 'Gender') }}
                <div class="dropdown form-group" id="location">
                    {{ Form::select('select_gender', ['' => 'Select Gender', 'M' => 'Male', 'F' => 'Female', 'Co-Ed' => 'Co-Ed'], null, ['class' => 'form-control dropdown-toggle btn btn-default' ]) }}
                </div>
            </div>
        </div>

        <div class="form-group" @if($errors->has('description')) has-error @endif>
            {{ Form::label('description', 'Enter Description') }}
            {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter a Description for Your Event']) }}
        </div>

        <div class="form-group" @if($errors->has('url')) has-error @endif>
            {{ Form::label('url', 'Upload an Image') }}
            {{ Form::file('url', ['class' => 'form-control']) }}
        </div>
