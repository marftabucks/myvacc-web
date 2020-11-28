<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;

class RSPatientsController extends Controller
{
    public function index(){
        if (Auth::user()) {
            if (Auth::user()->role == 'rs') {
                $list = DB::table('pasiens')
                        ->join('forms', function ($join) {$join->on('pasiens.id', '=', 'forms.id_user');})
                        ->where('id_rs','=',Auth::user()->id)
                        ->orderBy('date')
                        ->get();

                return view('rs.dashboard-hospital-patients',['list' => $list]);
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
