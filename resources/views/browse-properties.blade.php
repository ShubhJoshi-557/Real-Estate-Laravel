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
                                <th>Property Id</th>
                                <th>Carpet Area</th>
                                <th>Price</th>
                                <th>Sale/Rent</th>
                                <th>Category</th>
                                <th>Deposit</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Seller Info</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for( $i = 0; $i < count($properties); $i++)
                            <?php
                                $property = $properties[$i];
                            ?>
                            <tr class="gradeX">
                                <td>{{ $property->id }}</td>
                                <td>{{ $property->carpet_area }}</td>
                                <td>{{ $property->price }}</td>
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
                                <td>
                                    Name: {{ $property->name }}
                                    <br>
                                    Email: {{ $property->email }}
                                    <br>
                                    Phone: {{ $property->phone }}
                                    <br>
                                </td>
                                <td class="center">
                                    @if( $property -> available == "yes" )
                                        <a href="{{ url('#') }}" class="btn btn-primary btn-mini">View Property</a> 
                                        <form action="/buyer/make-booking/{{ $property->id }}" method="post">
                                            @csrf
                                            <input type="submit" value="book">
                                        </form>
                                    @else
                                        Already Booked!
                                    @endif
                                </td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
