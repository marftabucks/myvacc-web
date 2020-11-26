<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Form2Controller extends Controller
{
    public function index($hospital_id){ 

        $quotas = DB::table('quotas')
                     ->select(DB::raw('id,date,available'))
                     ->orderBy('province')
                     ->orderBy('city')
                     ->orderBy('name')
                     ->get();
    }
    public function store(Request $request){    
       
    }
}
