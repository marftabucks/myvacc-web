<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Symfony\Component\VarDumper\Dumper\esc;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            switch (Auth::user()->role) {
                case "pasien":
                    return redirect()->intended('home');
                    break;
                case "pemerintah":
                    return redirect()->intended('pemerintah-patients');
                    break;
                case "rs":
                    return redirect()->intended('rs-quota');
                    break;
              }
        }
        else{
            return redirect()->intended('login');
        }
    }
}
