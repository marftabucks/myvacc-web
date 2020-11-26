<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RSProfileController extends Controller
{
    public function index(){

        $rs = DB::table('r_s')
        -> select(DB::raw('id,name,email,province,city,address'))
        -> where('id','=',Auth::id())
        -> get();
        $rs = $rs[0];

        return view('rs.profile-hospital',['rs' => $rs]);
    }
}
 