@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image:url({{url('images/bg.jpg')}});" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
    <div class="col-md-9 pb-0 text-center">
        <h1 class="mb-3 bread">About Us</h1>
    </div>
    </div>
</div>
</section>

<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-10">

        @if(session()->has('message'))
            <div class="alert alert-success text-center">
                <strong>{{ Session::get('head') }} </strong> {{ Session::get('message') }}
            </div>
        @endif

        <div class="row justify-content-center">
			<div class="col-md-12 text-center heading-section heading-section-grey">
				<span class="subheading">About Us</span>
                <p><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, officiis? Quidem quas similique deserunt aliquid accusamus natus vero id fuga assumenda omnis dicta, vel consequuntur tempora ullam itaque incidunt alias!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam doloribus doloremque reprehenderit. Id laborum corrupti adipisci fugiat veritatis ratione commodi itaque repellat incidunt dignissimos, asperiores nemo doloribus! Veritatis, nostrum excepturi! <br></p>
			</div>
		</div>
        <div class="row justify-content-center">
			<div class="col-md-12 text-center heading-section heading-section-grey">
				<span class="subheading">Meet the team</span>
                <div class="row">
                    <div class="col-md-6 p-5">
                        <div class="aboutus-wrap">
                            <p class="img" style="background-image: url({{ asset('images/ssj.jpg') }});"></p>
                            <div class="text">
                                <ul class="property_list">
                                    <li>
                                       <h1>Shubh Joshi</h1></li>
                                    <br>
                                    <li>Student at St. Francis Institute of technology</li>
                                    <br>
                                    <li>TE CMPN A</li>
                                    <br>
                                    <li>Batch 3 | Roll No:39</li>
                                    <br>
                                    <li>Pid: 182046</li>
                                    <br>
                                </ul>
                                <h3><a href="#">Social Media Links</a></h3>
                                <ul class="mt-3">
                                    <li><a href="https://www.instagram.com/__.iamssj.__/"><span class="fa fa-instagram"></span></a></li>
                                    <li><a href="https://www.linkedin.com/in/shubh-joshi-481abb1ba/"><span class="fa fa-linkedin ml-4"></span></a></li>
                                    <li><a href="https://github.com/ShubhJoshi-557"><span class="fa fa-github ml-4"></span></a></li>
                                </ul>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-5">
                        <div class="aboutus-wrap">
                            <p class="img" style="background-image: url({{ asset('images/prasad.jpg') }});"></p>
                            <div class="text">
                                <ul class="property_list">
                                    <li>
                                       <h1>Prasad Kamath</h1></li>
                                    <br>
                                    <li>Student at St. Francis Institute of technology</li>
                                    <br>
                                    <li>TE CMPN A</li>
                                    <br>
                                    <li>Batch 3 | Roll No: 40</li>
                                    <br>
                                    <li>Pid: 182047</li>
                                    <br>
                                </ul>
                                <h3><a href="#">Social Media Links</a></h3>
                                <ul class="mt-3">
                                    <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                                    <li><a href="https://www.linkedin.com/in/kamathprasad9/"><span class="fa fa-linkedin ml-4"></span></a></li>
                                    <li><a href="https://github.com/kamathprasad9"><span class="fa fa-github ml-4"></span></a></li>
                                </ul>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>   
			</div>
		</div>
    </div>
</div>

@endsection


