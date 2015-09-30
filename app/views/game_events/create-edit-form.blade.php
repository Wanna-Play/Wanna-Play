
        {{ Form::token() }}

        <div class="form-group">
            {{ Form::label('select_sport', 'Select Sport') }}<br>
            <div class="dropdown form-group" id="location">
                {{ Form::select('select_sport', $sportDropdown, null, ['class' => 'form-control dropdown-toggle btn btn-default' ]) }}
            </div>
        </div>

        
        <div class="form-group @if($errors->has('event_name')) has-error @endif">
            {{ Form::label('event_name', 'Event Name') }}
            {{ Form::text('event_name', null, ['class' => 'form-control']) }}
        </div>


        <div class="row">
            <div class="form-group col-sm-6 @if($errors->has('date')) has-error @endif">
                {{ Form::label('start_time', 'Start Time/Date') }}
                {{ Form::text('start_time', null, ['class' => 'form-control', 'id' => 'startsAtDateTimePicker', 'placeholder' => 'Enter Starting Time']) }}
            </div>
            <div class="form-group col-sm-6 ">
                {{ Form::label('end_time', 'End Time/Date') }}
                {{ Form::text('end_time', null, ['class' => 'form-control', 'id' => 'endsAtDateTimePicker', 'placeholder' => 'Enter Ending Time']) }}
            </div>
        </div>
        
        
        <div id="location_dropdown">
            <div class="form-group">
                {{ Form::label('select_city', 'Select City') }}<br>
                <div class="dropdown form-group" id="location">
                    {{ Form::select('select_city', $cityDropdown, null, ['class' => 'form-control dropdown-toggle btn btn-default' ]) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('location', 'Select Existing Venue or Add a New Venue for Your Event') }}<br>
                <div class="dropdown form-group" id="location">
                    {{ Form::select('location', $dropdown, null, ['class' => 'form-control dropdown-toggle btn btn-default' ]) }}
                </div>
            </div>

            <div id="where_section">
            	
            		<div class="form-group" id="location-name">
                        {{ Form::label('location_name', 'Venue Name') }}
            			{{ Form::text('location_name', null, ['class' => 'form-control', 'placeholder' => 'Venue Name']) }}
            		</div>

            		<div class="form-group" id="location-street">
                        {{ Form::label('location_street', 'Street Address') }}
            			{{ Form::text('location_street', null, ['class' => 'form-control', 'placeholder' => 'Street Address']) }}
            		</div>
            	
            	<div class="row">
            		<div class="form-group col-sm-8" id="location-city">
                        {{ Form::label('location_city', 'City') }}
            			{{ Form::text('location_city', null, ['class' => 'form-control', 'placeholder' => 'City']) }}
            		</div>

                    <div class="form-group col-sm-4" id="location-zip">
                        {{ Form::label('location_zip', 'Zip') }}
                        {{ Form::number('location_zip', null, ['class' => 'form-control', 'placeholder' => 'Zip']) }}
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-sm-3">
                {{ Form::label('cost', 'Price') }}
                {{ Form::number('cost', null, ['class' => 'form-control', 'placeholder' => 'Price Per Player']) }}
            </div>

            <div class="form-group col-sm-6">
                {{ Form::label('select_skill_level', 'Skill Level') }}
                <div class="dropdown form-group" id="location">
                    {{ Form::select('select_skill_level', ['' => 'Choose Skill Level', 'beginner' => 'Beginner', 'intermediate' => 'Intermediate', 'advanced' => 'Advanced'], null, ['class' => 'form-control dropdown-toggle btn btn-default' ]) }}
                </div>
            </div>

            <div class="form-group col-sm-3">
                {{ Form::label('select_gender', 'Gender') }}
                <div class="dropdown form-group" id="location">
                    {{ Form::select('select_gender', ['' => 'Choose Gender', 'M' => 'Male', 'F' => 'Female'], null, ['class' => 'form-control dropdown-toggle btn btn-default' ]) }}
                </div>
            </div>
        </div>
    

        <div class="form-group @if($errors->has('description')) has-error @endif">
            {{ Form::label('enter_description', 'Description') }}
            {{ Form::textarea('enter_description', null, ['class' => 'form-control' ]) }}
        </div>

        <div class="form-group">
            {{ Form::label('event_image', 'Upload an Image') }}
            {{ Form::file('event_image', ['class' => 'form-control']) }}
        </div>


