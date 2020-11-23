<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RSPatientsController extends Controller
{
    public function index(){
        return view('rs.dashboard-hospital-patients');
    }
}
