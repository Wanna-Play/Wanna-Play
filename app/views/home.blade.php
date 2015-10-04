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
<body class="homePageImage">

	<div id="block" style="width: 100%; height: 650px; z-index: -100;" data-vide-bg="/video/full" data-vide-options="position: 0% 50%"></div>

	<div class="center-container">
		<div id="homePageSpecial" class="col-sm-12">
			<div class="container">
				@include('includes.navbar')
			</div>
            
            <div class="container">
	        	<section id="contentContainer">

					<div class="container col-sm-12">
						<div class="row" id="homeSelectionForm">
							<div class="col-sm-offset-1 col-sm-10 col-sm-offset-1 col-md-offset-3 col-md-6 col-md-offset-3 transparentOverlay">
								<div>
									<h1 class="whiteHeader">GaME On</h1>
									<div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
										{{ Form::open() }}
											<div class="dropdown">

											</div>


											<div class="form-group">
									            <h2 class="homeHeadLine">What do you wanna play?</h2>
									            <div class="dropdown form-group" id="sportDropdown">
									                {{ Form::select('select_sport', $sportDropdown, null, ['class' => 'form-control dropdown-toggle calendarSelect', 'id' => 'sportDropdown', 'data-toggle' => 'dropdown', 'aria-haspopup' => 'true', 'aria-expanded' => 'false']) }}
									            </div>
									        </div>

									        <div class="form-group">
									            <h2 class="homeHeadLine">What city are you in?</h2>
									            <div class="dropdown form-group" id="cityDropdown">
									                {{ Form::select('select_city', $cityDropdown, null, ['class' => 'form-control dropdown-toggle calendarSelect', 'aria-labelledby' => 'cityDropdown']) }}
									            </div>
									        </div>
											
											<div class="col-sm-12 col-md-offset-1 col-md-10 col-md-offset-1">
												<a href="#" class="btn btn-lg btn-block" id="homePageButton">Check the games</a>
											</div>
										{{ Form::close() }}
									</div>
								</div>
							</div>
						</div>
					</div>

				</section>
	        </div>
	    </div>
    </div>

    <div class="container col-sm-offset-3 col-sm-6 col-sm-offset-3" id="belowtheImage">
		<div class="row" id="aboutSection">
			<h2>What is Wanna Play?</h2>
			<p>Wanna Play connects people (aged 18+) who love to play sports in Texas!</p>
			<p>Our team understands how important it is to integrate <em>play</em> into <em>every day</em>. So we developed a website for adults to connect with others in the area who play the sports they love.</p>
			<p>This site was created as a capstone project for Codeup's Web development bootcamp. We utilized all the technologies and frameworks that we learned in class&mdash;including jQuery, MySQL, and the Laravel MVC framework&mdash;as well as some new tools for implementing a video feature.</p>
		</div>
	</div>

	<hr class="page-divider">

	<div class="container col-sm-offset-3 col-sm-6 col-sm-offset-3">
		<div class="row" id="aboutSection">
			<h2>Meet the Developers</h2>
			<div class="row">
				<div class="col-md-6">
					<img src="/img/amanda.jpg" class="img-circle devTeamPic">
					<h4>Amanda Ortiz</h4>
					<p>Originated project concept, primary responsibilities include database creation and video production.</p>
					<p>Email Amanda</p>
				</div>

				<div class="col-md-6">
					<img src="/img/jordan.jpg" class="img-circle devTeamPic">
					<h4>Jordan Sandoval</h4>
					<p>Primary responsibilities cover the database and back-end development, with some work on front-end of the site.</p>
					<p>Email Jordan</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<img src="/img/rachel.jpg" class="img-circle devTeamPic">
					<h4>Rachel Pierce</h4>
					<p>Mainly focused on front-end design with some work on the back-end side.</p>
					<p>Email Rachel</p>
				</div>

				<div class="col-md-6">
					<img src="/img/julie.jpg" class="img-circle devTeamPic">
					<h4>Julie Buser</h4>
					<p>Focus on front-end and back-end integration and development, particularly for the site's tagging feature.</p>
					<p>Email Julie</p>
				</div>
			</div>

		</div>
	</div>
	
	
	@include('includes.footer')


{{-- Bootstrap JS --}}
<link rel="stylesheet" href="/bower/bower_components/bootstrap/dist/js/bootstrap.min.js">

{{-- jQuery --}}
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
<script src="/bower/bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="/js/jquery.tagsinput.js"></script>
<script>window.jQuery || document.write('<script src="../libs/jquery/dist/jquery.min.js"><\/script>')</script>
<script src="../bower/bower_components/vide/src/jquery.vide.js"></script>


<script>
//  $(document).ready(function () {
//    $('#block').vide('video/ocean'); // Non declarative initialization
//
//    var instance = $('#block').data('vide'); // Get the instance
//    var video = instance.getVideoObject(); // Get the video object
//    instance.destroy(); // Destroy instance
//
//    $('#block2').vide({
//      'mp4': 'video/ocean',
//      'webm': 'video/ocean',
//      'ogv': 'video/ocean',
//      'poster': 'video/ocean',
//    });
//  });
</script>

</body>
</html>