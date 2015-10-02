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

	<div id="block" style="width: 100%; height: 650px; z-index: -100;" data-vide-bg="/video/full" data-vide-options="position: 0% 50%"></div>

	<div class="center-container">
		<div id="homePageImage" class="col-sm-12" style="z-index: 100;">
			<div class="container">
				@include('includes.navbar')
			</div>
            
        	<section id="contentContainer">

				<div class="container col-sm-12">
					<div class="row" id="homeSelectionForm">
						<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3 transparentOverlay">
							<div>
								<h1 class="whiteHeader">GaME On</h1>
								<div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
									{{ Form::open() }}
										<div class="form-group">
								            <h2 class="homeHeadLine">What do you wanna play?</h2>
								            <div class="dropdown form-group" id="sportDropdown">
								                {{ Form::select('select_sport', $sportDropdown, null, ['class' => 'form-control dropdown-toggle calendarSelect', 'aria-labelledby' => 'sportDropdown']) }}
								            </div>
								        </div>

								        <div class="form-group">
								            <h2 class="homeHeadLine">What city are you in?</h2>
								            <div class="dropdown form-group" id="cityDropdown">
								                {{ Form::select('select_city', $cityDropdown, null, ['class' => 'form-control dropdown-toggle calendarSelect', 'aria-labelledby' => 'cityDropdown']) }}
								            </div>
								        </div>
										
										<div class="col-sm-12 col-md-offset-2 col-md-8 col-md-offset-2">
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

    <div class="container col-sm-offset-3 col-sm-6 col-sm-offset-3">
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
					<img src="http://placehold.it/150x150" class="img-circle devTeamPic">
					<h4>Amanda Ortiz</h4>
					<p>Originated project concept, primary responsibilities include database creation and video production.</p>
					<p>Email Amanda</p>
				</div>

				<div class="col-md-6">
					<img src="http://placehold.it/150x150" class="img-circle devTeamPic">
					<h4>Jordan Sandoval</h4>
					<p>Primary responsibilities cover the database and back-end development, with some work on front-end of the site.</p>
					<p>Email Jordan</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<img src="http://placehold.it/150x150" class="img-circle devTeamPic">
					<h4>Rachel Pierce</h4>
					<p>Mainly focused on front-end design with some work on the back-end side.</p>
					<p>Email Rachel</p>
				</div>

				<div class="col-md-6">
					<img src="http://placehold.it/150x150" class="img-circle devTeamPic">
					<h4>Julie Buser</h4>
					<p>Focus on front-end and back-end integration and development, particularly for the site's tagging feature.</p>
					<p>Email Julie</p>
				</div>
			</div>

		</div>
	</div>
	


	<footer class="footer col-sm-12">
		<div class="container">
				<h4>Contact Us</h4>
			<div class="col-sm-12 col-md-4">
				<p>Don't see the sport you love or your city on Wanna Play? Let us know! Email our team at <a href="#">hello@wannaplay.com</a>. Or you can complete our contact form right here &#10141;</p>
			</div>

			<div class="col-sm-12 col-md-8">
				{{ Form::open() }}
				<div class="col-sm-6">
					<div class="form-group">
						{{ Form::label('contact_name','Your Name') }}
						{{ Form::text('contact_name', null, ['class' => 'form-control']) }}
					</div>

					<div class="form-group">
						{{ Form::label('contact_email','Your Email') }}
						{{ Form::email('contact_email', null, ['class' => 'form-control']) }}
					</div>
				
					<div class="form-group">
						{{ Form::label('contact_subject','Subject') }}
						{{ Form::text('contact_subject', null, ['class' => 'form-control']) }}
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						{{ Form::label('contact_message','Message') }}
						{{ Form::textarea('contact_message', null, ['class' => 'form-control']) }}
					</div>
				</div>
				{{ Form::close() }}
			</div>					
			</div>

			
		</div>
	</footer>


<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="/bower/bower_components/jquery/dist/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../libs/jquery/dist/jquery.min.js"><\/script>')</script>
<script src="../bower/bower_components/vide/src/jquery.vide.js"></script>

<script src="../src/jquery.vide.js"></script>


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