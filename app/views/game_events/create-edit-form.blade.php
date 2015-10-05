
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
        </div>

        <div class="row">
            <div class="form-group col-sm-6" id="phone" @if($errors->has('phone')) has-error @endif>
                <label for="phone-number">Phone number</label> {{-- DO NOT change "label for phone-number", "input id phone-number", "input type text" -- JS mask for phone # is connected to these. see script below for reference. --}}
                <input id="phone-number" name="phone" type="text" maxlength="14" placeholder="Venue's Phone" class="form-control">
            </div>

            <div class="form-group col-sm-6" id="url" @if($errors->has('phone')) has-error @endif>
                    {{ Form::label('url', 'URL') }}
                    {{ Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'Venue\'s Website']) }}
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-4" @if($errors->has('amount')) has-error @endif>
                {{ Form::label('amount', 'Cost') }}
                <div class="input-group">
                    <span class="input-group-addon">$</span>

                {{ Form::text('amount', null, ['class' => 'form-control', 'placeholder' => 'Price Per Player']) }}
                </div>
            </div>

            <div class="form-group col-sm-5" @if($errors->has('skill_level')) has-error @endif>
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


<script type="text/javascript">
   
    $('#phone-number')

    .keydown(function (e) {
        var key = e.charCode || e.keyCode || 0;
        $phone = $(this);

        // Auto-format- do not expose the mask as the user begins to type
        if (key !== 8 && key !== 9) {
            if ($phone.val().length === 0) {
                $phone.val('(');
            }
            if ($phone.val().length === 4) {
                $phone.val($phone.val() + ')');
            }
            if ($phone.val().length === 5) {
                $phone.val($phone.val() + ' ');
            }           
            if ($phone.val().length === 9) {
                $phone.val($phone.val() + '-');
            }
        }

        // Allow numeric (and tab, backspace, delete) keys only
        return (key == 8 || 
                key == 9 ||
                key == 46 ||
                (key >= 48 && key <= 57) ||
                (key >= 96 && key <= 105)); 
    })
    
    .bind('focus click', function () {
        $phone = $(this);
        
        if ($phone.val().length === 0) {
            $phone.val('(');
        }
        else {
            var val = $phone.val();
            $phone.val('').val(val); // Ensure cursor remains at the end
        }
    })
    
    .blur(function () {
        $phone = $(this);
        
        if ($phone.val() === '(') {
            $phone.val('');
        }
    });

</script>
