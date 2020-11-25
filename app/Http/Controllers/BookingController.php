<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Property;
use App\Models\Admin;
use App\Models\User;
use Auth;

class BookingController extends Controller
{
    public function index(){

        $buyer_id =  Auth::user() -> id ;

        $buyer_bookings = Booking::where( 'buyer_id' , $buyer_id ) -> get();

        $bookings = [];
        $sellers = [];
        $properties = [];

        foreach ( $buyer_bookings as $buyer_booking ){
            $property = Property :: where( 'id' , $buyer_booking -> property_id ) -> get();
            $seller = Admin :: where( 'id', $property[0]->seller_id)->get();
            array_push( $bookings , $buyer_booking -> booking_id );
            array_push( $properties , $property );
            array_push( $sellers , $seller );
        }

        // print_r($property);

        return view( 'buyer.bookings' , [ 
            'bookings' => $bookings,
            'properties' => $properties,
            'sellers' => $sellers
        ] );
    }

    public function buyerDetails( $property_id ) {

        $booking = Booking::where( 'property_id' , $property_id ) -> get();

        $buyer = User::where( 'id', $booking[0]->buyer_id)
                ->select('users.name', 'users.email', 'users.phone') 
                -> get();

        return view( 'seller.buyer-details', [ 'buyer' => $buyer ]);
    }
}
