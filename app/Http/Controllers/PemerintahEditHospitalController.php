<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemerintahEditHospitalController extends Controller
{
    public function index(){
        return view('pemerintah.edit-hospital');
    }
}
