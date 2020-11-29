@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image:url({{url('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
    <div class="col-md-9 pb-0 text-center">
        <h1 class="mb-3 bread">Add Properties</h1>
    </div>
    </div>
</div>
</section>

<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light">
                <!-- <div class="card-header">{{ __('Add Property') }}</div> -->

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.addproperties.submit') }}" enctype="multipart/form-data">
                        @csrf

                        General Info
                        
                        <hr><br>
                        <div class="form-group row">
                            <label for="carpet_area" class="col-md-4 col-form-label text-md-right">{{ __('Carpet Area') }}</label>

                            <div class="col-md-6">
                                <input id="carpet_area" type="number" min="100" class="form-control @error('carpet_area') is-invalid @enderror" name="carpet_area" required autofocus>

                                @error('carpet_area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" min="100" class="form-control @error('price') is-invalid @enderror" name="price" required >

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sale_rent" class="col-md-4 col-form-label text-md-right">{{ __('Sale/Rent') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="sale" name="sale_rent" value="sale" class="ml-4 mt-2">
                                <label for="sale">Sale</label>
                                <input type="radio" id="rent" name="sale_rent" value="rent" class="ml-4 mt-2">
                                <label for="rent">Rent</label>
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                        <div class="col-md-6">
                            <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" required placeholder="eg. 2BHK,Bungalow,Condo" autofocus>

                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deposit" class="col-md-4 col-form-label text-md-right">{{ __('Deposit') }}</label>

                            <div class="col-md-6">
                                <input id="deposit" type="number" min="100" class="form-control @error('deposit') is-invalid @enderror" name="deposit" required >

                                @error('deposit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" required autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="area" class="col-md-4 col-form-label text-md-right">{{ __('Area') }}</label>

                        <div class="col-md-6">
                            <input id="area" type="text" class="form-control @error('area') is-invalid @enderror" name="area" required autofocus>

                                @error('area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" required autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       

                        <div class="input-group row">
                            <label class="col-md-4 col-form-label text-md-right">Select image:</label>
                            <div class="col-md-6">
                                <input type="file" name="image" required>
                            </div>
                        </div>

                        <br>
                        Essential Amenities
                        <hr><br>

                        <div class="form-group row">
                            <label for="parking" class="col-md-4 col-form-label text-md-right">{{ __('Parking') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="yes" name="parking" value="yes" class="ml-4 mt-2 mt-2" required>
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="parking" value="no" class="ml-4 mt-2">
                                <label for="no">No</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="security_services" class="col-md-4 col-form-label text-md-right">{{ __('Security Services') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="yes" name="security_services" value="yes" class="ml-4 mt-2" required>
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="security_services" value="no" class="ml-4 mt-2">
                                <label for="no">No</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="water_supply" class="col-md-4 col-form-label text-md-right">{{ __('Water Supply') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="yes" name="water_supply" value="yes" class="ml-4 mt-2" required>
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="water_supply" value="no" class="ml-4 mt-2">
                                <label for="no">No</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="power_backup" class="col-md-4 col-form-label text-md-right">{{ __('Power Backup') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="yes" name="power_backup" value="yes" class="ml-4 mt-2" required>
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="power_backup" value="no" class="ml-4 mt-2">
                                <label for="no">No</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="daily_maintenance" class="col-md-4 col-form-label text-md-right">{{ __('Daily Maintenance') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="yes" name="daily_maintenance" value="yes" class="ml-4 mt-2" required>
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="daily_maintenance" value="no" class="ml-4 mt-2">
                                <label for="no">No</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="wifi" class="col-md-4 col-form-label text-md-right">{{ __('WiFi') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="yes" name="wifi" value="yes" class="ml-4 mt-2" required>
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="wifi" value="no" class="ml-4 mt-2">
                                <label for="no">No</label>
                            </div>
                        </div>

                        Discretionary Amenities
                        <hr><br>
                        <div class="form-group row">
                            <label for="jogging_track" class="col-md-4 col-form-label text-md-right">{{ __('Jogging Track') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="yes" name="jogging_track" value="yes" class="ml-4 mt-2" required>
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="jogging_track" value="no" class="ml-4 mt-2">
                                <label for="no">No</label>
                            </div>
                        </div><div class="form-group row">
                            <label for="lawn" class="col-md-4 col-form-label text-md-right">{{ __('Lawn') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="yes" name="lawn" value="yes" class="ml-4 mt-2" required>
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="lawn" value="no" class="ml-4 mt-2">
                                <label for="no">No</label>
                            </div>
                        </div><div class="form-group row">
                            <label for="clubhouse" class="col-md-4 col-form-label text-md-right">{{ __('Clubhouse') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="yes" name="clubhouse" value="yes" class="ml-4 mt-2" required>
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="clubhouse" value="no" class="ml-4 mt-2">
                                <label for="no">No</label>
                            </div>
                        </div><div class="form-group row">
                            <label for="pool" class="col-md-4 col-form-label text-md-right">{{ __('Pool') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="yes" name="pool" value="yes" class="ml-4 mt-2" required>
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="pool" value="no" class="ml-4 mt-2">
                                <label for="no">No</label>
                            </div>
                        </div><div class="form-group row">
                            <label for="gym" class="col-md-4 col-form-label text-md-right">{{ __('Gym') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="yes" name="gym" value="yes" class="ml-4 mt-2" required>
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="gym" value="no" class="ml-4 mt-2">
                                <label for="no">No</label>
                            </div>
                        </div><div class="form-group row">
                            <label for="party_hall" class="col-md-4 col-form-label text-md-right">{{ __('Party Hall') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="yes" name="party_hall" value="yes" class="ml-4 mt-2" required>
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="party_hall" value="no" class="ml-4 mt-2">
                                <label for="no">No</label>
                            </div>
                        </div><div class="form-group row">
                            <label for="temple" class="col-md-4 col-form-label text-md-right">{{ __('Temple') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="yes" name="temple" value="yes" class="ml-4 mt-2" required>
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="temple" value="no" class="ml-4 mt-2">
                                <label for="no">No</label>
                            </div>
                        </div>
                        Close Proximity from
                        <hr><br>
                        <div class="form-group row">
                            <label for="school" class="col-md-4 col-form-label text-md-right">{{ __('School') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="yes" name="school" value="yes" class="ml-4 mt-2" required>
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="school" value="no" class="ml-4 mt-2">
                                <label for="no">No</label>
                            </div>
                        </div><div class="form-group row">
                            <label for="hospital" class="col-md-4 col-form-label text-md-right">{{ __('Hospital') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="yes" name="hospital" value="yes" class="ml-4 mt-2" required>
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="hospital" value="no" class="ml-4 mt-2">
                                <label for="no">No</label>
                            </div>
                        </div><div class="form-group row">
                            <label for="station" class="col-md-4 col-form-label text-md-right">{{ __('Railway Station') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="yes" name="station" value="yes" class="ml-4 mt-2 mt-2" required>
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="station" value="no" class="ml-4 mt-2 mt-2">
                                <label for="no">No</label>
                            </div>
                        </div><div class="form-group row">
                            <label for="airport" class="col-md-4 col-form-label text-md-right">{{ __('Airport') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="yes" name="airport" value="yes" class="ml-4 mt-2 mt-2" required>
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="airport" value="no" class="ml-4 mt-2 mt-2">
                                <label for="no">No</label>
                            </div>
                        </div><div class="form-group row">
                            <label for="cinema_hall" class="col-md-4 col-form-label text-md-right">{{ __('Cinema Hall') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="yes" name="cinema_hall" value="yes" class="ml-4 mt-2" required>
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="cinema_hall" value="no" class="ml-4 mt-2">
                                <label for="no">No</label>
                            </div>
                        </div><div class="form-group row">
                            <label for="restaurants" class="col-md-4 col-form-label text-md-right">{{ __('Restaurants') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="yes" name="restaurants" value="yes" class="ml-4 mt-2" required>
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="restaurants" value="no" class="ml-4 mt-2">
                                <label for="no">No</label>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Done !') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
