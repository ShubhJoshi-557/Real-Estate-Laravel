<!DOCTYPE html>
<html lang="en">
	
<head>
		<title>EZHomes</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&amp;display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
				<a class="navbar-brand" href="{{ url('/') }}">EZHomes</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span> Menu
				</button>

				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
							<li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
							@if (Route::has('login'))
								@auth
										<li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Buyer Dashboard</a></li>
								@else
								@auth('admin')
										<li class="nav-item"><a href="{{ route('admin.login') }}" class="nav-link">Seller Dashboard</a></li>
								@else
									<li class="nav-item dropdown">
										<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
											Login
										</a>
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="{{ route('login') }}">
												Buyer Login
											</a>
											<a class="dropdown-item" href="{{ route('admin.login') }}">
												Seller Login
											</a>
										</div>
									</li>
										@if (Route::has('register'))
												<li class="nav-item dropdown">
													<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
														Register
													</a>
													<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
														<a class="dropdown-item" href="{{ route('register') }}">
															Buyer Registration
														</a>
														<a class="dropdown-item" href="{{ route('admin.register') }}">
															Seller Registration
														</a>
													</div>
												</li>
										@endif
								@endif
								@endif
							@endif
							<li class="nav-item">
                            	<a class="nav-link" href="{{ url('aboutus') }}">About Us</a>
                        	</li>
							<li class="nav-item">
                                <a class="nav-link" href="{{ route('feedback') }}">Feedback</a>
                            </li>
							
					</ul>
				</div>
			</div>
		</nav>
		<!-- END nav -->
		
		<section class="hero-wrap" style="background-image: url('images/bg.jpg');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center">
					<div class="col-lg-7 col-md-6  d-flex align-items-end">
						<div class="text">
							<h1 class="mb-4">Buy and Sale <br>Of Properties Now Made Easy.</h1>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pb ftco-no-pt bg-primary">
			<div class="container">
				<div class="row d-flex no-gutters">
					<div class="col-md-3 d-flex align-items-stretch justify-content-center">
						<div class="media block-6 services services-bg d-block text-center px-4 py-5">
							<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-business"></span></div>
							<div class="media-body py-md-5">
								<h3>Trusted by Thousands</h3>
							</div>
						</div>      
					</div>
					<div class="col-md-3 d-flex align-items-stretch  justify-content-center">
						<div class="media block-6 services services-bg d-block text-center px-4 py-5">
							<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-home"></span></div>
							<div class="media-body py-md-5">
								<h3>Wide Range of Properties</h3>
							</div>
						</div>      
					</div>
					<div class="col-md-3 d-flex align-items-stretch  justify-content-center">
						<div class="media block-6 services services-bg d-block text-center px-4 py-5">
							<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-stats"></span></div>
							<div class="media-body py-md-5">
								<h3>Choose a property that suits your budget</h3>
							</div>
						</div>      
					</div>
					<div class="col-md-3 d-flex align-items-stretch  justify-content-center">
						<div class="media block-6 services services-bg d-block text-center px-4 py-5">
							<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-quarantine"></span></div>
							<div class="media-body py-md-5">
								<h3>No third party involved</h3>
							</div>
						</div>      
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section services-section bg-darken">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center heading-section heading-section-white ">
						<span class="subheading">Work flow</span>
						<h2 class="mb-3">How it works</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 d-flex align-self-stretch ">
						<div class="media block-6 services services-2">
							<div class="media-body py-md-4 text-center">
								<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>1</span>
								<img src="images/blob.svg" alt="">
								</div>
								<h3>Seller Enlists</h3>
								<p>Seller provides the details of their property.</p>
							</div>
						</div>      
					</div>
					<div class="col-md-3 d-flex align-self-stretch ">
						<div class="media block-6 services services-2">
							<div class="media-body py-md-4 text-center">
								<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>2</span>
								<img src="images/blob.svg" alt=""></div>
								<h3>Buyer Checks Their Needs</h3>
								<p>Buyer has the choice to select from a wide range of properties.</p>
							</div>
						</div>      
					</div>
					<div class="col-md-3 d-flex align-self-stretch ">
						<div class="media block-6 services services-2">
							<div class="media-body py-md-4 text-center">
								<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>3</span>
								<img src="images/blob.svg" alt=""></div>
								<h3>Negotiate and Close the Deal</h3>
								<p>Seller details are provided for each property, buyer can contact them and negotiate a deal.</p>
							</div>
						</div>      
					</div>
					<div class="col-md-3 d-flex align-self-stretch ">
						<div class="media block-6 services services-2">
							<div class="media-body py-md-4 text-center">
								<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>4</span>
								<img src="images/blob.svg" alt=""></div>
								<h3>Have Your Property</h3>
								<p>We strive for our users to have a great experience.</p>
							</div>
						</div>      
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-counter img" id="section-counter">
			<div class="container">
				<div class="row pt-md-5 justify-content-center">
					<div class="col-md-6 col-lg-3 justify-content-center counter-wrap">
						<div class="block-18 py-5 mb-4">
							<div class="text text-border d-flex align-items-center">
								<strong class="number">{{ $properties }}</strong>
								<span>Total <br>Properties</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 justify-content-center counter-wrap">
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
					<div class="col-md-7 text-center heading-section ">
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
                <h2 class="ftco-heading-2">EZHomes</h2>
                <p>Far far away, behind the word mountains, far from the countries.</p>
                <ul class="ftco-footer-social list-unstyled mt-5">
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                <h2 class="ftco-heading-2">Contact The Devs</h2>
                <ul class="list-unstyled">
                    <li><span class="fa fa-chevron-right mr-2"></span>Shubh Joshi | 9876543210</li>
                    <li>shubhjoshi@ezhomes.com</li>
                </ul>
                <ul class="list-unstyled">
                    <li><span class="fa fa-chevron-right mr-2"></span>Prasad Kamath | 8796543210</li>
                    <li>prasadkamath@ezhomes.com</li>
                </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                    <ul>
                        <li><span class="icon fa fa-map"></span><span class="text">St. Francis Institue of Technology, Borivali West, Mumbai</span></li>
                        <li><span class="icon fa fa-phone"></span><span class="text">022 444 4444</span></li>
                        <li><span class="icon fa fa-envelope pr-4"></span><span class="text">support@ezhomes.com</span></li>
                    </ul>
                    </div>
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