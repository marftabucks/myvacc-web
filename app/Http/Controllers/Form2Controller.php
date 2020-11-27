<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Form2Controller extends Controller
{
    public function index(){ 
        $forms = DB::table('forms')
                     ->select(DB::raw('id,id_rs'))
                     ->where('id_user','=',Auth::id())
                     ->get();
        $form = $forms[0];

        $hospital_id = $form->id_rs;

        $quotas = DB::table('quotas')
                     ->select(DB::raw('id,id_rs,date,available'))
                     ->where('id_rs','=',$hospital_id)
                     ->where('available','>',0)
                     ->orderBy('date')
                     ->get();

        $hospital = DB::table('r_s')
                    ->select(DB::raw('id,name'))
                    ->where('id','=',$hospital_id)
                    ->get();
        $hospital = $hospital[0];

        // dd($form,$quotas,$hospital);
        
        return view('user.vaccination-form2',[
            'quotas' => $quotas,
            'hospital' => $hospital,
            'form' => $form,
            ]);
    }
    public function store(Request $request){    
        // dd($request);

        DB::table('forms')
              ->where('id', $request->id_form)
              ->update([
                  'date' => $request->date,
                  ]);

        DB::table('quotas')
            ->where('id_rs', $request->id_rs)
            ->where('date', $request->date)
            ->decrement('available');

        DB::table('pasiens')
              ->where('id', Auth::id())
              ->update([
                  'filled_form' => True,
                  ]);

        return redirect()->intended('vacc-ticket');
       
    }
}
