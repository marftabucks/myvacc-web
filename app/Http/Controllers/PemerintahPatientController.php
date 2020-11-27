<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemerintahPatientController extends Controller
{
    public function index(){
        if (Auth::user()) {
            if (Auth::user()->role = 'pemerintah') {

                $verified_pasiens = DB::table('pasiens')
                                    ->select(DB::raw('id, name, email, nik, selfie, verified'))
                                    ->where('verified', '=', 1)
                                    ->get();
                
                $unverified_pasiens = DB::table('pasiens')
                                    ->select(DB::raw('id, name, email, nik, selfie, verified'))
                                    ->where('verified', '=', 0)
                                    ->get();
                
                return view('pemerintah.dashboard-pemerintah-patients',['verified_pasiens' => $verified_pasiens,'unverified_pasiens' => $unverified_pasiens]);
            }
            else{
                return redirect()->intended('home');
            }
        }
        else {
            return redirect()->intended('home');
        }


        
    }

    public function store(Request $request){

        // dd($request);
        $id = $request->id;

        $pasien = Pasien::find($id);
        if ($pasien->verified == 1){
            $pasien->verified = 0;
        }
        else {
            $pasien->verified = 1;
        }
        $pasien->save();
        return redirect()->intended('pemerintah-patients');
    }
}
 