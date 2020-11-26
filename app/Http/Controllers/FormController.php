<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index(){ 

        $user = DB::table('pasiens')
                -> select(DB::raw('id,name,email,nik,selfie,verified,filled_form'))
                -> where('id','=',Auth::id())
                -> get();
        $user = $user[0];
        
        return view('user.vaccination-form',['user' => $user]);
    }
    public function store(Request $request){
        Form::create([
            'id_user' => Auth::id() ,
            'name' => $request->name,
            'id_rs' => 1,
            'hospital' => $request->hospital,
            'province' => $request->province,
            'city' => $request->city,
            'date' => $request->date,
            'time' => $request->time,
        ]);

        DB::table('pasiens')
              ->where('id', Auth::id())
              ->update([
                  'filled_form' => True,
                  ]);

        // echo('form added');
 
        return redirect()->intended('home');
    }
}
