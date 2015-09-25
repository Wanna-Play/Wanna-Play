<!-- Navbar -->
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{{ action('HomeController@showWelcome') }}}">Wanna Play<i class="icon-soccer"></i></a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			@if ( Auth::check() )
			<ul class="nav navbar-nav">
				<li><a class="active linkNav">Hi, Bob!</a></li>
				<li><a class="linkNav" href="#">My Account</a></li>
				<li><a class="linkNav" href="#">Create</a></li>
				<li><a class="linkNav" href="#">Edit</a></li>
			</ul>	

			<ul class="nav navbar-nav navbar-right">
				<li><a class="linkNav" href="#">Sports</a></li>
				<li><a class="linkNav" href="#">Events</a></li>
				<li class="logIn"><a class="linkNav" href="{{{ action('HomeController@showLogin') }}}">Logout</a></li>
			</ul>
			@else
			<ul class="nav navbar-nav navbar-right">
				<li><a class="linkNav" href="#">Sports</a></li>
				<li><a class="linkNav" href="#">Events</a></li>
				<li class="logIn"><a class="linkNav" href="{{{ action('HomeController@showLogin') }}}">Sign Up / Log In</a></li>
			</ul>
			@endif	
		</div><!--/.nav-collapse -->
	</div><!--/.container-fluid -->
</nav>