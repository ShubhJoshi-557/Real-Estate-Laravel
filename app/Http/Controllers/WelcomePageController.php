<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Property;
use App\Models\Feedback;

class WelcomePageController extends Controller
{
    public function show(){
        $properties = count(Property::all());
        $bookings = count(Booking::all());
        $feedbacks = count(Feedback::all());
        return view('welcome', [
            'properties' => $properties,
            'bookings' => $bookings,
            'feedbacks' => $feedbacks,
        ]);
    }
}
