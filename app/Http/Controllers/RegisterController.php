<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pasien;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){
        if (Auth::user()) {
            if (Auth::user()->role = 'pemerintah') {
                return redirect()->intended('home');
            }
            else{
                return redirect()->intended('home');
            }
        }
        else {
            return view('auth.register');
        }
    }
    public function store(Request $request){
        // Storing data to database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            Pasien::create([
                'id' => Auth::id(),
                'name' => $request->name,
                'nik' => $request->nik,
                'email' => $request->email,
                'selfie' => $request->selfie,
            ]);
            return redirect()->intended('home');
        }
    }
}
