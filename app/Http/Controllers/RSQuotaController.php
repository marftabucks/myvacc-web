<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RSQuotaController extends Controller
{
    public function index(){
        return view('rs.dashboard-hospital-quota');
    }
}
