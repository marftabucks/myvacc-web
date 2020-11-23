<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RSEditProfileController extends Controller
{
    public function index(){
        return view('rs.edit-profile-hospital');
    }
}
