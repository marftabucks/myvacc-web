<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){ 

        $user = DB::table('pasiens')
                -> select(DB::raw('id,name,filled_form'))
                -> where('id','=',Auth::id())
                -> get();
        if ($user != null){
            $user = $user[0];
        }
        
        return view('home',['user' => $user]);
    }
}
