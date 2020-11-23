<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RSProfileController extends Controller
{
    public function index(){
        return view('rs.profile-hospital');
    }
}
