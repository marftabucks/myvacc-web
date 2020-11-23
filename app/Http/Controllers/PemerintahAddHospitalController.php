<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemerintahAddHospitalController extends Controller
{
    public function index(){
        return view('pemerintah.add-hospital');
    }
}
