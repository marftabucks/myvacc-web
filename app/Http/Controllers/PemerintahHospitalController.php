<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemerintahHospitalController extends Controller
{
    public function index(){
        return view('pemerintah.dashboard-pemerintah-hospitals');
    }
}
