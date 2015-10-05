<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="csrf-token" content="{{{ csrf_token() }}}">

	{{-- Bootstrap CSS --}}
	<link rel="stylesheet" href="/bower/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/bower/bower_components/bootstrap/dist/css/bootstrap-theme.css">

	{{-- Sportsfont CSS --}}
	<link rel="stylesheet" href="/bower/bower_components/sportsfont/css/sports.css">

	{{-- Custom CSS --}}
	<link rel="stylesheet" href="/css/custom.css">

	{{-- Font Awesome icons --}}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


  	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/themes/start/jquery-ui.css" />

  	<link rel="stylesheet" type="text/css" href="/css/jquery.tagsinput.css" />

	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>


	{{-- Date Time Picker CSS --}}
	<link rel="stylesheet" href="/bower/bower_components/datetimepicker/jquery.datetimepicker.css">

	<title>Wanna Play</title>
</head>
<body>
	<div class="col-sm-12" id="notTheHome">
		<div class="container">
			@include('includes.navbar')
		</div>

		<div class="container">
			<section id="contentContainer">
				@yield('content')
			</section>

		</div>
	</div>

@include('includes.footer')


{{-- Bootstrap JS --}}
<script src="/bower/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

{{-- jQuery --}}
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
<script src="/bower/bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="/js/jquery.tagsinput.js"></script>
<script>window.jQuery || document.write('<script src="../libs/jquery/dist/jquery.min.js"><\/script>')</script>
<script src="../bower/bower_components/vide/src/jquery.vide.js"></script>


@yield('script')
</body>
</html>
