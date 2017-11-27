<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        //Validate form data
        $this->validate($request , [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        //Login the user
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            //If success redirect to intended location
            return redirect()->intended(route('admin.dashboard'));
        }

        //If unsuccess go back to login
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
