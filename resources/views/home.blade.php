@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as Buyer') }}
                    <br><hr>
                    <a href="{{ url('/browseProperties') }}" class="text-sm text-blue-700 underline">Browse Properties</a><br>
                    <br><hr>
                    <a href="{{ url('/bookings') }}" class="text-sm text-blue-700 underline">Check your Bookings</a><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
