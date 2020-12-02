@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image:url({{url('images/bg.jpg')}});" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
    <div class="col-md-9 pb-0 text-center">
        <h1 class="mb-3 bread">Feedback Form</h1>
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

        <h2 class="text-center">If you got any questions <br>please do not hesitate to send us a message</h2><br>
            <div class="card bg-light">

                <div class="card-body">
                    <form method="POST" action="{{ route('create-feedback') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="first_impression" class="col-md-4 col-form-label text-md-right">What was your first impression when you entered the website?</label>
                            <div class="col-md-6">
                                <textarea name="first_impression" id="first_impression" cols="20" rows="5" class="form-control" placeholder="Answer"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hear_about_us" class="col-md-4 col-form-label text-md-right">How did you first hear about us?</label>

                            <div class="col-md-6">
                                <textarea name="hear_about_us" id="hear_about_us" cols="20" rows="5" class="form-control" placeholder="Answer"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="feedback" class="col-md-4 col-form-label text-md-right">Is there anything missing on this website?</label>

                            <div class="col-md-6">
                                <textarea name="feedback" id="feedback" cols="20" rows="5" class="form-control" placeholder="Answer"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="recommend_us" class="col-md-4 col-form-label text-md-right">How likely are you to recommend us to a friend or
colleague?</label>
                            <div class="col-md-6">
                                <select id="recommend_us" name="recommend_us">
                                    <option value="Very likely">Very likely</option>
                                    <option value="Likely">Likely</option>
                                    <option value="Unlikely">Unlikely</option>
                                    <option value="Very unlikely">Very unlikely</option>
                                </select>     
                            </div>
                        </div>
                    
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


