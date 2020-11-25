@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('View Properties') }}</div>
                
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
