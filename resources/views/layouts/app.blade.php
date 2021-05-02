<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel NewsPortal</title>
	<!-- Fonts -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' 
	type='text/css'>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
	<!-- Styles -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
	<style>
		.footer {
			display: flex;
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 60px;
			background-color: #f5f5f5;
			align-items: center;
			text-align: center;
		} 
	</style> 
	<link rel="stylesheet" href='{{ asset("css/style.css") }}'>
 </head>
<body id="app-layout">
	<nav class="navbar navbar-default">
	 <div class="container">
		 <div class="navbar-header">
			 <!-- Collapsed Hamburger -->
			 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
			 <span class="sr-only">Toggle Navigation</span>
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
			 </button>
			 <!-- Menyy ссылки-->
			 <a class="navbar-brand" href="{{ url('/') }}"> Home</a>
			 <a class="navbar-brand" href="{{ url('/news') }}"> News</a>
			 <a class="navbar-brand" href="{{ url('/categorylist') }}">Categories(CRUD) </a>
			 <a class="navbar-brand" href="{{ url('/newslist') }}">News list(CRUD) </a>
		 </div>
		 <div class="collapse navbar-collapse" id="app-navbar-collapse">
			 <!-- Left Side Of Navbar -->
			 <ul class="nav navbar-nav">
			 </ul>
			 <!-- Right Side Of Navbar -->
			 <ul class="nav navbar-nav navbar-right">
				 <!-- Authentication Links -->
				 @if (Auth::guest())
				 <li><a href="{{ url('/login') }}" class="navbar-brand" >Login</a></li>
				 <li><a href="{{ url('/register') }}" class="navbar-brand" >Register</a></li>
				 @else
				 <li class="dropdown">
					 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
					 {{ Auth::user()->name }} <span class="caret"></span>
					 </a>
					 <ul class="dropdown-menu" role="menu">
					 	<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
					 </ul>
				 </li>
				 @endif
			 </ul>
		 </div>
	 </div>
	 </nav>
	<div class="content" style="min-height:500px;"><!-- вывод динамического контента -->
	 	@yield('content')
	</div>
	<footer class="footer">
		<div class="container">
			<span class="text-muted">2021 Laravel News Portal Design &copy; Luchinskii V</span>
		</div>
	</footer>
	 <!-- JavaScripts -->
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	 {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>