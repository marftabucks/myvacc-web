<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilePatientController extends Controller
{
    public function index(){
        return view('user.profile-patient');
    }
}
