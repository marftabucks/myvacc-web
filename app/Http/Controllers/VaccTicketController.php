<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VaccTicketController extends Controller
{
    public function index(){
        $user = DB::table('pasiens')
                -> select(DB::raw('id,name,email,nik,selfie,verified,filled_form'))
                -> where('id','=',Auth::id())
                -> get();
        $user = $user[0];
        
        return view('user.vaccination-ticket',['user' => $user]);
    }
}
