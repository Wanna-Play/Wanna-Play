<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	{{-- Bootstrap CSS --}}
	<link rel="stylesheet" href="/bower/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/bower/bower_components/bootstrap/dist/css/bootstrap-theme.css">


	{{-- Bootstrap jQuery --}}
	<link rel="stylesheet" href="/bower/bower_components/bootstrap/dist/js/bootstrap.min.js">

	{{-- Sportsfont CSS --}}
	<link rel="stylesheet" href="/bower/bower_components/sportsfont/css/sports.css">

	{{-- Custom CSS --}}
	<link rel="stylesheet" href="/css/custom.css">

	{{-- Font Awesome icons --}}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<title>Wanna Play</title>
</head>
<body>
	<div id="homePageImage" class="col-sm-12">
		<div class="container">
			@include('includes.navbar')
		</div>

		<section id="contentContainer">

			@yield('content')

		</section>

	</div>

	<footer class="footer col-sm-12">
		<div class="container">
			<div class="col-sm-4">
				<h4>About</h4>
				<p>Wanna Play connects people who love to play sports in Texas!</p>
				<p>This site was created as a capstone project for Codeup's Web development bootcamp.</p>
			</div>

			<div class="col-sm-4">
				<h4>The Team</h4>
				<p>Meet our dev team: Amanda Ortiz, Rachel Pierce and Jordan Sandoval</p>
			</div>

			<div class="col-sm-4">
				<h4>Contact</h4>
				<p>Don't see the sport you love or your city on Wanna Play? Let us know! Email our team at <a href="#">hello@wannaplay.com</a> </p>
			</div>
		</div>
	</footer>


<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="/bower/bower_components/jquery/dist/jquery.min.js"></script>
</body>
</html>