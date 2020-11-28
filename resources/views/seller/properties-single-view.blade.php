@extends('layouts.app')

@section('content')

	<section class="hero-wrap hero-wrap-2" style="background-image:url({{url('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
				<div class="col-md-9 pb-0 text-center">
					<h1 class="mb-3 bread">Property Details</h1>
				</div>
			</div>
		</div>
	</div>
	</section>

	<section class="ftco-section ftco-property-details">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="property-details">
						<div class="img" style="background-image: url({{ asset('images/'.$property->image) }});">
							<span class="fa fa-play"></span>
						</a>
						</div>
						<div class="text">
							<span class="subheading">{{ $property -> city }}</span>
							<h2>{{ $property -> address }}</h2>
							@if( $property -> available == "yes" )							
								<a href="{{ url('/admin/edit-properties/'.$property->id) }}" class="btn btn-primary btn-mini">Edit</a> 
								<a  id="delProperty" href="{{ url('/admin/delete-property/'.$property->id) }}" class="btn btn-danger btn-mini">Delete</a>								
							@else						
								<button type="button" class="btn btn-info" disabled>Booked!</button>
								<a href="{{ url('/admin/buyer-details/'.$property->id) }}" class="btn btn-primary btn-mini">Buyer Details</a> 								
							@endif
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pills">
					<div class="bd-example bd-example-tabs">
						<div class="d-flex">
							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
								<li class="nav-item">
								<a class="nav-link active" id="pills-features-tab" data-toggle="pill" href="#pills-features" role="tab" aria-controls="pills-features" aria-expanded="true">Features</a>
								</li>
								<li class="nav-item">
								<a class="nav-link" id="pills-amenities-tab" data-toggle="pill" href="#pills-amenities" role="tab" aria-controls="pills-amenities" aria-expanded="true">Description</a>
								</li>
							</ul>
						</div>

						<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-features" role="tabpanel" aria-labelledby="pills-features-tab">
									<div class="row">
										<div class="col-md-4">
											<ul class="features">
											<li class="check"><span class="fa fa-check-circle"></span>Carpet Area: {{ $property -> carpet_area }} SQ FT</li>
											<?php
												if($property -> sale_rent == 'sale'){
													$sale_rent = 'Sale';
												}else {
													$sale_rent = 'Rent';
												}


												if($property -> available == 'yes'){
													$available = 'Available';
												}else {
													$available = 'Not Available';
												}
											?>
											<li class="check"><span class="fa fa-check-circle"></span>Status: {{ $available }}</li>
											<li class="check"><span class="fa fa-check-circle"></span>Category: {{ $property -> category }}</li>
											<li class="check"><span class="fa fa-check-circle"></span>Price: Rs. {{ $property -> price }} (for {{ $sale_rent }})</li>
											<li class="check"><span class="fa fa-check-circle"></span>Deposit: {{ $property -> deposit }}</li>
										</ul>
										</div>
									</div>
								</div>

								<div class="tab-pane fade" id="pills-amenities" role="tabpanel" aria-labelledby="pills-amenities-tab">
									<div class="row">
										<?php
											$yes = [];
											$no = [];
											
											$obj = json_decode( $amenity );

											foreach ($obj as $key => $value) {
												if( $value == 'yes' ){
													array_push( $yes, $key );
												}elseif( $value == 'no' ){
													array_push( $no, $key );
												}
											}			
										?>
										@if( count($yes) != 0)
											<div class="col-md-4">
												<ul class="features">
													<?php										
														foreach ($yes as $item) {
															$string = ucwords(str_replace('_',' ',$item));
															echo "<li class='check'><span class='fa fa-check-circle'></span>$string</li>";
														}
													?>
												</ul>
											</div>
										@endif
										@if( count($no) != 0)
											<div class="col-md-4">
												<ul class="features">
													<?php
														foreach ($no as $item) {
															$string = ucwords(str_replace('_',' ',$item));
															echo "<li class='cross'><span class='fa fa-check-circle'></span>$string</li>";
														}
													?>
												</ul>
											</div>
										@endif
									</div>
								</div>
					</div>
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
		</div>
		</div>
	</div>
	</footer>
	



<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script src="{{ asset('js/google-map.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-23581568-13');
</script>
	
@endsection