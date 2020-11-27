<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfilePatientController extends Controller
{
    public function index(){

        if (Auth::user()) {
            if (Auth::user()->role = 'pasien') {
                $user = DB::table('pasiens')
                        -> select(DB::raw('id,name,email,nik,selfie,verified,filled_form'))
                        -> where('id','=',Auth::id())
                        -> get();
                $user = $user[0];
                
                return view('user.profile-patient',['user' => $user]);
                
            }
            else{
                return redirect()->intended('home');
            }
        }
        else {
            return redirect()->intended('home');
        }

        
    }
}
