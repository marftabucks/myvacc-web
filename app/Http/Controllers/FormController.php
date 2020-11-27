<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;

class FormController extends Controller
{
    public function index(){ 
        if (Auth::user()) {
            if (Auth::user()->role = 'pasien') {
                $user = DB::table('pasiens')
                        -> select(DB::raw('id,name,email,nik,selfie,verified,filled_form'))
                        -> where('id','=',Auth::id())
                        -> get();
                $user = $user[0];

                $hospitals = DB::table('r_s')
                            ->select(DB::raw('id,name, province, city'))
                            ->orderBy('province')
                            ->orderBy('city')
                            ->orderBy('name')
                            ->get();
                
                return view('user.vaccination-form',['user' => $user, 'hospitals' => $hospitals]);
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

        $hospital_id = $request->hospital_id;

        $hospital = DB::table('r_s')
                -> select(DB::raw('id,name,province,city'))
                -> where('id','=',$hospital_id)
                -> get();
        $hospital = $hospital[0];

        Form::create([
            'id_user' => Auth::id() ,
            'name' => $request->name,
            'id_rs' => $request->hospital_id,
            'hospital' => $hospital->name,
            'province' => $hospital->province,
            'city' => $hospital->city,
        ]);

        

        // echo('form added');
 
        return redirect()->intended('form2');
    }
}
