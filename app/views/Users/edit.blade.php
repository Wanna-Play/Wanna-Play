@extends('layouts.master')

@section('content')

<div class="col-xs-12">
	<section id="updateUserForm">
		@foreach($errors->all() as $error)
	        <div class="alert alert-warning" role="alert">{{{ $error }}}</div>
	    @endforeach

	    <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-sm-offset-1 col-md-offset-2 col-md-8 col-md-offset-2 pull-left">
	    	<h2>Edit Your Profile</h2>
	    	{{ Form::model($user, array('action'=> array('UsersController@update', $user->id), 'method'=>'PUT', 'files' => true)) }}
    		{{ Form::open(array('action' => 'UsersController@store', 'files'=>true)) }}
    		
    			@include('users.users-create-edit-form')

    			<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3 media">
					{{ Form::button('Save Edits', array('class' => 'btn btn-lg btn-block', 'type' => 'submit')) }}
				</div>

    		{{ Form::close() }}
	    </div>
	</section>
</div>


@stop


@section('script')

{{-- jQuery tagsInput plugin script --}}
<script>

$(document).ready(function(){

	$('#sports_list').tagsInput();
});

</script>

@stop



