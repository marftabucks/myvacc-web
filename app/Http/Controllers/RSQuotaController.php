<?php

namespace App\Http\Controllers;

use App\Models\Quota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RSQuotaController extends Controller
{
    public function index(){
        $quotas = DB::table('quotas')
                     ->select(DB::raw('name_rs, date, quota, available'))
                     ->where('id_rs', '=', Auth::id())
                     ->get();

        return view('rs.dashboard-hospital-quota',['quotas' => $quotas]);
    }
    public function store(Request $request){
        Quota::create([
            'id_rs' => Auth::id() ,
            'name_rs' => Auth::user()->name,
            'date' => $request->date,
            'quota' => $request->quota,
            'available' => $request->quota,
        ]);

        return redirect()->intended('rs-quota');
    }
}
