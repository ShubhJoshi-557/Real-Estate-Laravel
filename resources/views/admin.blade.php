@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        <div class="col-md-9 pb-0 text-center">
            <h1 class="mb-3 bread">Seller Dashboard</h1>
        </div>
        </div>
    </div>
</section>

<div class="container p-5">
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

                    <a href="{{ route('admin.addproperties') }}" class="text-sm text-blue-700 underline">Add Properties</a><br><hr>
                    <a href="{{ route('admin.viewproperties') }}" class="text-sm text-blue-700 underline">View/Manage Your Properties</a><br>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
