<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function store(Request $request){
        // Storing data to database
        User::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'selfie' => $request->selfie
        ]);

        // auth()->attempt($request->only('email','password'));

        // return redirect()->route('dashboard-user');

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard-user');
        }
    }
}
