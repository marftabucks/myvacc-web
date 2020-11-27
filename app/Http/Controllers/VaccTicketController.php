<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VaccTicketController extends Controller
{
    public function index(){
        $vaccform = DB::table('forms')
                -> select(DB::raw('id,id_user,name,id_rs,hospital,province,city,date,created_at,updated_at'))
                -> where('id_user','=',Auth::id())
                -> get();
        $vaccform = $vaccform[0];
        
        $user = DB::table('pasiens')
                -> select(DB::raw('id,name,email,nik,selfie,verified,filled_form'))
                -> where('id','=',Auth::id())
                -> get();
        $user = $user[0];

        $hospital = DB::table('r_s')
                    ->select(DB::raw('id,name,address'))
                    ->where('id','=',$vaccform->id_rs)
                    ->get();
        $hospital = $hospital[0];

        return view('user.vaccination-ticket',[
            'user' => $user, 
            'vaccform' => $vaccform,
            'hospital' => $hospital
            ]);
    }
}
