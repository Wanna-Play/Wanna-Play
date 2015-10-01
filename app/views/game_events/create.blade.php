@extends('layouts.master')

@section('content')
<div class="col-xs-12">
	<div id="createEvent">

		@foreach($errors->all() as $error)
            <div class="alert alert-warning" role="alert">{{{ $error }}}</div>
        @endforeach

        <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-sm-offset-1 col-md-offset-2 col-md-8 col-md-offset-2 pull-left">
        	<h1>Create an Event</h1>
        	{{ Form::open(array('action' => 'GameEventsController@store', 'files' => true)) }}

       		@include('game_events.create-edit-form')
        
	        <div class="form-group">
				{{ Form::label('organizer_contact', 'Organizer Contact Agreement') }}
				<p>Organizers <em>must</em> agree to be contacted by players who register for the event and have questions related to the event.</p>
				<input type="checkbox" id="organizer_contact"> Check this box to agree and complete your event listing<br>
			</div>

			<div class="col-xs-12 col-sm-offset-3 col-sm-6 col-sm-offset-3 media">
				{{ Form::button('Submit Event', array('class' => 'btn btn-lg btn-block', 'type' => 'submit')) }}
			</div>
		</div>

			{{ Form::close() }}
		</div>

	</div>
</div>


        

</div>
@stop

@section('script')
<script src="/bower/bower_components/datetimepicker/jquery.datetimepicker.js"></script>
<script src="/bower/bower_components/moment/min/moment.min.js"></script>

<script>
   Date.parseDate = function( input, format ){
     return moment(input,format).toDate();
   };
   Date.prototype.dateFormat = function( format ){
     return moment(this).format(format);
   };
   jQuery('#startsAtDateTimePicker').datetimepicker({
       format:'YYYY-MM-DD h:mm a',
       formatTime:'h:mm a',
       formatDate:'DD-MM-YYYY'
   });
   jQuery('#endsAtDateTimePicker').datetimepicker({
       format:'YYYY-MM-DD h:mm a',
       formatTime:'h:mm a',
       formatDate:'DD-MM-YYYY'
   });
  $("select").change(function () {
    if ($("select option:selected").val() != -1) {
      $('#where_section').slideUp(500);
    } else {
      $('#where_section').slideDown(500);
    }
  });
</script>
@stop