@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image:url({{url('images/bg.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        <div class="col-md-9 pb-0 text-center">
            <h1 class="mb-3 bread">Buyer Details</h1>
        </div>
        </div>
    </div>
</section>

<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Buyer Details') }}</div>
                
                <div class="card-body">
                    <?php
                        $buyer = $buyer[0];
                    ?>
                    Name: {{ $buyer -> name }}
                    <br>
                    Email: {{ $buyer -> email }}
                    <br>
                    Phone: {{ $buyer -> phone }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
