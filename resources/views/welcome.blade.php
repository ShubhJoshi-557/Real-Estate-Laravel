<!DOCTYPE html>
<html lang="en">
	
<head>
		<title>EZHomes</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&amp;display=swap" rel="stylesheet">

		<link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="css/animate.css">
		
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		
		<link rel="stylesheet" href="css/flaticon.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="index-2.html">EZHomes</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span> Menu
				</button>

				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
							<li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
							@if (Route::has('login'))
								@auth
										<li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Buyer Login</a></li>
										<li class="nav-item"><a href="{{ route('admin.login') }}" class="nav-link">Seller Login</a></li>
								@else
										<li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Buyer Login</a></li>
										<li class="nav-item"><a href="{{ route('admin.login') }}" class="nav-link">Seller Login</a></li>

										@if (Route::has('register'))
												<li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register as Buyer</a></li>
												<li class="nav-item"><a href="{{ route('admin.register') }}" class="nav-link">Register as Seller</a></li>
										@endif
								@endif
							@endif
							<li class="nav-item">
                                <a class="nav-link" href="{{ route('feedback') }}">Feedback</a>
                            </li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END nav -->
		
		<section class="hero-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center">
					<div class="col-lg-7 col-md-6 ftco-animate d-flex align-items-end">
						<div class="text">
							<h1 class="mb-4">Buy and Sale <br>Of Properties Now Made Easy.</h1>
							<p style="font-size: 18px;">From as low as $20 A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pb ftco-no-pt bg-primary">
			<div class="container">
				<div class="row d-flex no-gutters">
					<div class="col-md-3 d-flex align-items-stretch ftco-animate">
						<div class="media block-6 services services-bg d-block text-center px-4 py-5">
							<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-business"></span></div>
							<div class="media-body py-md-4">
								<h3>Trusted by Thousands</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>      
					</div>
					<div class="col-md-3 d-flex align-items-stretch ftco-animate">
						<div class="media block-6 services services-bg services-darken d-block text-center px-4 py-5">
							<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-home"></span></div>
							<div class="media-body py-md-4">
								<h3>Wide Range of Properties</h3>
								<p>Select the type that suits your needs best.</p>
							</div>
						</div>      
					</div>
					<div class="col-md-3 d-flex align-items-stretch ftco-animate">
						<div class="media block-6 services services-bg services-lighten d-block text-center px-4 py-5">
							<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-stats"></span></div>
							<div class="media-body py-md-4">
								<h3>Financing Made Easy</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>      
					</div>
					<div class="col-md-3 d-flex align-items-stretch ftco-animate">
						<div class="media block-6 services services-bg d-block text-center px-4 py-5">
							<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-quarantine"></span></div>
							<div class="media-body py-md-4">
								<h3>Locked in Pricing</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>      
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section services-section bg-darken">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
						<span class="subheading">Work flow</span>
						<h2 class="mb-3">How it works</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 d-flex align-self-stretch ftco-animate">
						<div class="media block-6 services services-2">
							<div class="media-body py-md-4 text-center">
								<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>01</span>
								<img src="images/blob.svg" alt="">
								</div>
								<h3>Evaluate Property</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>      
					</div>
					<div class="col-md-3 d-flex align-self-stretch ftco-animate">
						<div class="media block-6 services services-2">
							<div class="media-body py-md-4 text-center">
								<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>02</span>
								<img src="images/blob.svg" alt=""></div>
								<h3>Meet Your Agent</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>      
					</div>
					<div class="col-md-3 d-flex align-self-stretch ftco-animate">
						<div class="media block-6 services services-2">
							<div class="media-body py-md-4 text-center">
								<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>03</span>
								<img src="images/blob.svg" alt=""></div>
								<h3>Close the Deal</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>      
					</div>
					<div class="col-md-3 d-flex align-self-stretch ftco-animate">
						<div class="media block-6 services services-2">
							<div class="media-body py-md-4 text-center">
								<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>04</span>
								<img src="images/blob.svg" alt=""></div>
								<h3>Have Your Property</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>      
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-7 order-md-last d-flex align-items-stretch">
						<div class="img w-100 img-2 mr-md-2" style="background-image: url(images/about.jpg);"></div>
						<div class="img w-100 img-2 ml-md-2" style="background-image: url(images/about-2.jpg);"></div>
					</div>
					<div class="col-md-5 wrap-about py-md-5 ftco-animate">
						<div class="heading-section pr-md-5">
							<h2 class="mb-4">Ecoverde Real Estate</h2>

							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-counter img" id="section-counter">
			<div class="container">
				<div class="row pt-md-5 justify-content-center">
					<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
						<div class="block-18 py-5 mb-4">
							<div class="text text-border d-flex align-items-center">
								<strong class="number">{{ $properties }}</strong>
								<span>Total <br>Properties</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
						<div class="block-18 py-5 mb-4">
							<div class="text d-flex align-items-center">
								<strong class="number">{{ $bookings }}</strong>
								<span>Total <br>Bookings</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section testimony-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5">
					<div class="col-md-7 text-center heading-section ftco-animate">
						<span class="subheading">Happy Clients</span>
						<h2 class="mb-3">{{ $feedbacks }} feedbacks recieved so far!</h2>
					</div>
				</div>
			</div>
		</section>

		<footer class="ftco-footer ftco-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Ecoverde</h2>
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
	
						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</div>
		</footer>
		
	

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-23581568-13');
</script>

</body>
</html>