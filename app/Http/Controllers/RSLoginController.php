<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RSLoginController extends Controller
{
    //
    public function index(){
        return view('auth.rs-login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('rs-quota');
        }
    }
}
