@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image:url({{url('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
    <div class="col-md-9 pb-0 text-center">
        <h1 class="mb-3 bread">Edit Properties</h1>
    </div>
    </div>
</div>
</section>

<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light">
                <!-- <div class="card-header">{{ __('Edit Property') }}</div> -->

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.editproperties',$property_id) }}" enctype="multipart/form-data">
                        @csrf

                        General Info
                        
                        <hr><br>
                        @foreach($property_details as $i)
                        <div class="form-group row">
                            <label for="carpet_area" class="col-md-4 col-form-label text-md-right">{{ __('Carpet Area') }}</label>
                            
                            <div class="col-md-6">
                                <input id="carpet_area" type="number" min="100" class="form-control @error('carpet_area') is-invalid @enderror" name="carpet_area" value="{{ $i->carpet_area }}" required autofocus>

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
                                <input id="price" type="number" min="100" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $i->price }}" required >

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
                            <?php
                                if($i->sale_rent=='sale'){
                                    echo"<input type='radio' id='sale' name='sale_rent' value='sale' class='ml-4 mt-2' checked>
                                    <label for='sale'>Sale</label>
                                    <input type='radio' id='rent' name='sale_rent' value='rent' class='ml-4 mt-2'>
                                    <label for='rent'>Rent</label>";
                                }
                                else{
                                    echo"<input type='radio' id='sale' name='sale_rent' value='sale' class='ml-4 mt-2'>
                                    <label for='sale'>Sale</label>
                                    <input type='radio' id='rent' name='sale_rent' value='rent' class='ml-4 mt-2' checked>
                                    <label for='rent'>Rent</label>";
                                }
                            ?>
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                        <div class="col-md-6">
                            <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ $i->category }}" required placeholder="eg. 2BHK,Bungalow,Condo" autofocus>

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
                                <input id="deposit" type="number" min="100" class="form-control @error('deposit') is-invalid @enderror" name="deposit" value="{{ $i->deposit }}" required >

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
                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ $i->city }}" required autofocus>

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
                            <input id="area" type="text" class="form-control @error('area') is-invalid @enderror" name="area" value="{{ $i->area }}" required autofocus>

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
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $i->address }}" required autofocus>

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
                                <input type="file" name="image">
                                <hr>
                                <img src="{{ asset('images/'.$i->image) }}" width=150px>
                                <?php
                                    echo"$i->image";
                                ?>
                            </div>
                        </div>
                        @endforeach
                        <br>
                        Amenities
                        <hr><br>

                        <?php
                            // echo "<div class='dbcontent' style='visibility:hidden;'>$amenity_details</div>";
                            $temp=[];
                            $temp1=[];
                            foreach ($amenity_details as $key => $value) {
                                array_push( $temp, $value );
                                array_push( $temp1, $key );
                                // print_r($key);
                                
                            }
                            $temp2=[];
                            for ($x = 1; $x <= 19; $x++) {
                                
                                $bruh = $temp[$x] == 'yes' ? 'checked' : '';
                                // echo"$bruh";
                                if($bruh=='checked'){
                                    array_push($temp2,"<div class='form-group row'><label for='$temp1[$x]' class='col-md-4 col-form-label text-md-right'>".ucwords(str_replace('_',' ',$temp1[$x]))."</label><div class='col-md-6'>
                                    <input type='radio' id='yes' name='$temp1[$x]' value='yes' class='ml-4 mt-2 mt-2 radio' required checked>
                                    <label for='yes'>Yes</label>
                                    <input type='radio' id='no' name='$temp1[$x]' value='no' class='ml-4 mt-2'>
                                    <label for='no'>No</label>
                                    </div></div>");
                                     
                                }else{
                                    array_push($temp2,"<div class='form-group row'><label for='$temp1[$x]' class='col-md-4 col-form-label text-md-right'>".ucwords(str_replace('_',' ',$temp1[$x]))."</label><div class='col-md-6'>
                                    <input type='radio' id='yes' name='$temp1[$x]' value='yes' class='ml-4 mt-2 mt-2 radio' required>
                                    <label for='yes'>Yes</label>
                                    <input type='radio' id='no' name='$temp1[$x]' value='no' class='ml-4 mt-2' checked>
                                    <label for='no'>No</label>
                                    </div></div>");
                                }
                                // echo "<li class='dbdata_array'>$temp[$x]</li>";
                              }			    
                            foreach($temp2 as $temp3){
                                echo"$temp3";
                            }
                        ?>

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
