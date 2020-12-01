<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('feedback');
    }

    public function create( Request $request ){

        $feedback = Feedback::create([
            'name' => $request['name'],
            'email' => $request['email'],            
            'first_impression' => $request['first_impression'],
            'hear_about_us' => $request['hear_about_us'],
            'feedback' => $request['feedback'],
            'recommend_us' => $request['recommend_us'],
        ]);
        
        $request->session()->flash('head', 'Success!');

        $request->session()->flash('message', 'Your feedback was successfully submitted! Thank you for your valuable response.');

        return redirect()->back();

    }
}
