@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('View Properties') }}</div>
                
                <div class="card-body">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>Property Id</th>
                                <th>Carpet Area</th>
                                <th>Price</th>
                                <th>Sale/Rent</th>
                                <th>Category</th>
                                <th>Deposit</th>
                                <th>City</th>
                                <th>Area</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if( count($bookings)==0 )
                                <span>You dont have any bookings yet!</span>
                            @else
                                @foreach($bookings as $property)
                                <tr class="gradeX">
                                    <td>{{ $property->booking_id }}</td>
                                    <td>{{ $property->carpet_area }}</td>
                                    <td>{{ $property->price }}</td>
                                    <td>{{ $property->sale_rent }}</td>
                                    <td>{{ $property->category }}</td>
                                    <td>{{ $property->deposit }}</td>
                                    <td>{{ $property->city }}</td>
                                    <td>{{ $property->booking_status }}</td>
                                    <td>
                                        <img src="{{ asset('images/'.$property->image) }}" width="80" height="50">
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
