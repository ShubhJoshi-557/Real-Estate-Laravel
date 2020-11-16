@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('View Properties') }}</div>
                
                <div class="card-body">
                    <a href="{{ url('/admin') }}" class="col-md-6 text-right"><-Back</a><br>
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
                                <th>City</th>
                                <th>Area</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($properties as $property)
                            <tr class="gradeX">
                                <td>{{ $property->id }}</td>
                                <td>{{ $property->carpet_area }}</td>
                                <td>{{ $property->price }}</td>
                                <td>{{ $property->sale_rent }}</td>
                                <td>{{ $property->category }}</td>
                                <td>{{ $property->deposit }}</td>
                                <td>{{ $property->city }}</td>
                                <td>{{ $property->area }}</td>
                                <td>
                                    <img src="{{ asset('images/'.$property->image) }}" width="80" height="50">
                                </td>
                                <td class="center"><a href="{{ url('/admin/edit-properties/'.$property->id) }}" class="btn btn-primary btn-mini">Edit</a> <a  id="delProperty" href="{{ url('/admin/delete-property/'.$property->id) }}" class="btn btn-danger btn-mini">Delete</a> </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
