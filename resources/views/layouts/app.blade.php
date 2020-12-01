<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>EZHomes</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.video.play.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	        <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">EZHomes</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('feedback') }}">Feedback</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login as Buyer</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register as Buyer</a>
                                </li> 
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>

    <footer class="ftco-footer ftco-section">
	<div class="container">
		<div class="row mb-5">
		<div class="col-md">
			<div class="ftco-footer-widget mb-4">
			<h2 class="ftco-heading-2">EZHomes</h2>
			<p>Far far away, behind the word mountains, far from the countries.</p>
			<ul class="ftco-footer-social list-unstyled mt-5">
				<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
				<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
				<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
			</ul>
			</div>
		</div>
		<div class="col-md">
			<div class="ftco-footer-widget mb-4 ml-md-4">
			<h2 class="ftco-heading-2">Community</h2>
			<ul class="list-unstyled">
				<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Search Properties</a></li>
				<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>For Agents</a></li>
				<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Reviews</a></li>
				<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>FAQs</a></li>
			</ul>
			</div>
		</div>
		<div class="col-md">
			<div class="ftco-footer-widget mb-4 ml-md-4">
			<h2 class="ftco-heading-2">About Us</h2>
			<ul class="list-unstyled">
				<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Our Story</a></li>
				<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Meet the team</a></li>
				<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
			</ul>
			</div>
		</div>
		<div class="col-md">
			<div class="ftco-footer-widget mb-4">
			<h2 class="ftco-heading-2">Company</h2>
			<ul class="list-unstyled">
				<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
				<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Press</a></li>
				<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
				<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
			</ul>
			</div>
		</div>
		<div class="col-md">
			<div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2">Have a Questions?</h2>
				<div class="block-23 mb-3">
				<ul>
					<li><span class="icon fa fa-map"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
					<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
					<li><a href="#"><span class="icon fa fa-envelope pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
				</ul>
				</div>
			</div>
		</div>
		</div>
		<div class="row">
		<div class="col-md-12 text-center">
		</div>
		</div>
	</div>
	</footer>
</body>
</html>
