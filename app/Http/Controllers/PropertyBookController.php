<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Booking;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class PropertyBookController extends Controller
{
    protected $table = 'properties';

    public function browseProperties(){

        $properties = DB::table('properties')
            ->join('admins', 'properties.seller_id', '=', 'admins.id')
            ->select('properties.*', 'admins.name', 'admins.email', 'admins.phone')
            ->get();

        // return($properties);

        return view('browse-properties',[ 'properties' => $properties ]);
    }
    
    public function makeBooking($id){

        // echo Property::find($id);

        $currentProperty = Property::find($id);
        $booking = new Booking();
        $booking -> seller_id = $currentProperty -> seller_id;
        $booking -> buyer_id = Auth::user() -> id ;
        $booking -> property_id = $currentProperty -> id;
        
        $booking -> save();

        $currentProperty -> available = 'no';

        $currentProperty -> save();

        return redirect('/bookings');
    }
}
