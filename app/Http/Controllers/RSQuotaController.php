<?php

namespace App\Http\Controllers;

use App\Models\Quota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RSQuotaController extends Controller
{
    public function index(){
        return view('rs.dashboard-hospital-quota');
    }
    public function store(Request $request){
        // dd($request);
        // dd(Auth::user()->name);
        Quota::create([
            'id_rs' => Auth::id() ,
            'name_rs' => Auth::user()->name,
            'date' => $request->date,
            'quota' => $request->quota,
        ]);

        return redirect()->intended('rs-quota');
    }
}
