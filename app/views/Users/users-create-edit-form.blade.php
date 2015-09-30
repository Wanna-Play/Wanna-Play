	{{ Form::token() }}

	<div class="form-group col-xs-12 col-sm-6 noPaddingLeft" @if($errors->has('first_name')) has-error @endif>
		{{ Form::label('first_name','First Name') }}
		{{ Form::text('first_name', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-xs-12 col-sm-6 noPaddingLeft noPaddingRight" @if($errors->has('last_name')) has-error @endif>
		{{ Form::label('last_name','Last Name') }}
		{{ Form::text('last_name', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group sports" @if($errors->has('sports')) has-error @endif>
		{{ Form::label('sports','Favorite Sports') }}
		{{ Form::textarea('enter_description', null, ['class' => 'form-control', 'id' => 'sports', 'name' =>'sports' ]) }}
	</div>

	<div class="form-group col-xs-12 col-sm-6 pull-left noPaddingLeft" @if($errors->has('city')) has-error @endif>
		{{ Form::label('city','City') }}
		{{ Form::text('city', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-xs-12 col-sm-3 noPaddingLeft noPaddingRight" @if($errors->has('zip')) has-error @endif>
		{{ Form::label('zip','ZIP Code') }}
		{{ Form::number('zip', null, ['class' => 'form-control']) }}
	</div>
	<div class="form-group col-xs-12 col-sm-3 pull-right noPaddingRight" @if($errors->has('gender')) has-error @endif>
		{{ Form::label('gender','Gender') }}
		<div class="dropdown form-group" id="location">
            {{ Form::select('gender', ['' => null, 'M' => 'Male', 'F' => 'Female'], null, ['class' => 'form-control dropdown-toggle btn btn-default' ]) }}
        </div>
	</div>
	<div class="form-group" @if($errors->has('email')) has-error @endif>
		{{ Form::label('email','Email') }}
		{{ Form::email('email', $value = null, ['class' => 'form-control']) }}
	</div>
	<div class="form-group" @if($errors->has('username')) has-error @endif>
		{{ Form::label('username','Username') }}
		{{ Form::text('username', null, ['class' => 'form-control']) }}
	</div>
	

