@extends('layouts.app')

@section('content')


<section class="hero-wrap hero-wrap-2" style="background-image:url({{url('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
    <div class="col-md-9 pb-0 text-center">
        <h1 class="mb-3 bread">Your Bookings</h1>
    </div>
    </div>
</div>
</section>


@if(count($properties) == 0)
    <div class="container p-5">
        <section class="ftco-section goto-here">
            <div class="justify-content-center">
                <div class="col-md-12 heading-section text-center mb-5">
                    <span class="subheading">No Properties Added</span>
                    <h2 class="mb-2">Add A Property First</h2>
                </div>
            </div>
        </section>
    </div>
@else
    <div class="container p-5">
        <section class="ftco-section goto-here">
            <div class="justify-content-center">
                <div class="col-md-12 heading-section text-center mb-5">
                    <span class="subheading">Your Bookings</span>
                    <h2 class="mb-2">Properties</h2>
                </div>
            </div>
            <div class="row">
                @for( $i = 0; $i < count($properties); $i++)
                    <?php
                        $property = $properties[$i];
                    ?>
                    <div class="col-md-4">
                        <div class="property-wrap">
                            <a href="{{ url('admin/property-single-view/'.$property->id) }}" class="img" style="background-image: url({{ asset('images/'.$property->image) }});">
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
                                <br>
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
                @endfor
            </div>
        </div>
        </section>    
    </div>
@endif

@endsection
