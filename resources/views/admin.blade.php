@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Seller Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as SELLER') }}
                    <br><hr>
                    <a href="{{ route('admin.addproperties') }}" class="text-sm text-blue-700 underline">Add Properties</a><br><hr>
                    <a href="{{ route('admin.viewproperties') }}" class="text-sm text-blue-700 underline">View/Manage Your Properties</a><br>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
