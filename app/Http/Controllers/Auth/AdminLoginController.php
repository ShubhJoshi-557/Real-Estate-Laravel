<?php

namespace App\Http\Controllers\Auth;
use Redirect;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin');
    }
    
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            return redirect()->intended(route('admin.dashboard'));  
        }

        return redirect()->back()->withErrors(['email' => ['These credentials do not match our records.']])->withInput($request->only('email','remember'));

    }
}
