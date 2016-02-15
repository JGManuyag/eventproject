<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wow</title>
	
	<link href="/css/app.css" rel="stylesheet">

	<link rel="shortcut icon" href="img/much.png"/>

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/home">Home</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
						<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Register</a></li>
					@else
						<!--
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Events <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{url('events')}}">View Events</a></li>
								<li><a href="{{url('events/create')}}">Add Events</a></li>
        						<li><a href="{{url('/manage')}}">Manage Events</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Attendees <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{url('attendees')}}">View Attendees</a></li>
						    	<li><a href="{{url('/attendees/create')}}">Add Attendees</a></li>
						    	<li><a href="{{url('/manage_att')}}">Manage Attendees</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Guests <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{url('guests')}}">View Guest</a></li>
						        <li><a href="{{url('/guests/create')}}">Add Guest</a></li>
						        <li><a href="{{url('/manage_g')}}">Manage Guest</a></li>
							</ul>
						</li> -->

						<li><a href="{{url('events')}}">Events</a></li>
						<li><a href="{{url('attendees')}}">Attendees</a></li>
						<li><a href="{{url('guests')}}">Guests</a></li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->fname }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ route('settings.edit', Auth::user()->id ) }}">Account</a></li>
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
