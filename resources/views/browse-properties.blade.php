@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
    <div class="col-md-9 pb-0 text-center">
        <h1 class="mb-3 bread">Browse Properties</h1>
    </div>
    </div>
</div>
</section>

<div class="container p-5">
    <section class="ftco-section goto-here">
            <div class="justify-content-center">
                <div class="col-md-12 heading-section text-center mb-5">
                    <span class="subheading">Properties</span>
                </div>
            </div>
            <div class="row">
                @for( $i = 0; $i < count($properties); $i++)
                    <?php
                        $property = $properties[$i];
                    ?>
                    <div class="col-md-4">
                        <div class="property-wrap">
                            <a href="{{ url('/property-single-view/'.$property->id) }}" class="img" style="background-image: url({{ asset('images/'.$property->image) }});">
                                <div class="rent-sale">
                                    <span class="sale">{{ $property -> sale_rent }}</span>
                                </div>
                                <p class="price"><span class="orig-price">Rs. {{ $property -> price }}</span></p>
                            </a>
                            <div class="text">
                                <ul class="property_list">
                                    <li>Property ID: {{ $property -> id }}</li>
                                    <br>
                                    <li>Category: {{ $property -> category }}</li>
                                    <br>
                                    <li>Carpet Area: {{ $property -> carpet_area }} sq. ft.</li>
                                    <br>
                                </ul>
                                <h3><a href="#">{{ $property -> address }}, {{ $property -> area }}</a></h3>
                                <span class="location">{{ $property -> city }}</span>
                                @if( $property -> available == "yes" )
                                    <br>
                                    <form action="/buyer/make-booking/{{ $property->id }}" method="post">
                                        @csrf
                                        <input type="submit" value="Book" class="btn btn-success">
                                    </form>
                                @else
                                    <br>
                                    <button type="button" class="btn btn-info" disabled>Booked!</button>
                                @endif
                                <div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
                                    <div class="d-flex align-items-center">
                                        <h3>{{ $property -> name }}</h3>
                                    </div>
                                    <span class="text-right">{{ $property -> phone }} {{ $property -> email }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
    </div>
    </section>    
</div>
@endsection