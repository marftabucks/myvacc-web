<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Form2Controller extends Controller
{
    public function index(){ 
        $forms = DB::table('forms')
                     ->select(DB::raw('id_rs'))
                     ->where('id_user','=',Auth::id())
                     ->get();

        $hospital_id = $forms[0]->id_rs;

        $quotas = DB::table('quotas')
                     ->select(DB::raw('id,date,available'))
                     ->where('id_rs','=',$hospital_id)
                     ->orderBy('date')
                     ->get();

        $hospital = DB::table('r_s')
                    ->select(DB::raw('id,name'))
                    ->where('id_rs','=',$hospital_id)
                    ->get();
        $hospital = $hospital[0];
        
        return view('user.vaccination-form2',['quotas' => $quotas,'hospital' => $hospital]);
    }
    public function store(Request $request){    
       
    }
}
