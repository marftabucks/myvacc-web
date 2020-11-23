<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditProfilePatientController extends Controller
{
    //user/edit-profile-patient
    public function index(){
        return view('user.edit-profile-patient');
    }
}
