<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Amenity;

class PropertySingleViewController extends Controller
{
    protected $table = 'properties';

    public function viewSingleProperty($id){

        $property = Property::find($id);
        $amenities = Amenity::where('property_id',$id)->get();

        return view('buyer.properties-single-view',[
            'property' => $property,
            'amenity' => $amenities[0]
        ]);
    }

    public function viewSinglePropertyAsSeller($id){

        $property = Property::find($id);
        $amenities = Amenity::where('property_id',$id)->get();

        return view('seller.properties-single-view',[
            'property' => $property,
            'amenity' => $amenities[0]
        ]);
    }
}