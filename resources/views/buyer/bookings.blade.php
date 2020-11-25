@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('View Properties') }}</div>
                
                <div class="card-body">
                    <a href="{{ url('/home') }}" class="col-md-6 text-right"><-Back</a><br>
                    <br>
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>Booking Id</th>
                                <th>Property Id</th>
                                <th>Price</th>
                                <th>Seller Details</th>
                                <th>Sale/Rent</th>
                                <th>Category</th>
                                <th>Deposit</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if( count($bookings)==0 )
                                <span>You have not made any bookings yet!</span>
                            @else
                                @for($i = 0; $i < count($bookings); $i++ ) 
                                <?php
                                    $booking = $bookings[$i];
                                    $property = $properties[$i][0];
                                    $seller = $sellers[$i][0];
                                ?>   
                                <tr class="gradeX">
                                    <td>{{ $booking }}</td> 
                                    <td>{{ $property->id }}</td>
                                    <td>{{ $property->price }}</td>
                                    <td>
                                        Name: {{ $seller->name }}
                                        <br>
                                        Email: {{ $seller->email }}
                                        <br>
                                        Contact: {{ $seller->phone }}
                                    </td>
                                    <td>{{ $property->sale_rent }}</td>
                                    <td>{{ $property->category }}</td>
                                    <td>{{ $property->deposit }}</td>
                                    <td>
                                        {{ $property->address }}
                                        <br>
                                        {{ $property->area }}
                                        <br>
                                        {{ $property->city }}
                                    </td>
                                    <td>
                                        <img src="{{ asset('images/'.$property->image) }}" width="80" height="50">
                                    </td>
                                </tr>
                                @endfor
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
