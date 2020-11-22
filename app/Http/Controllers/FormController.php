<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function index(){
        return view('user.vaccination-form');
    }
    public function store(Request $request){
        dd($request);
        // Form::create([
        //     'name' => $request->nama,
        //     'hospital' => $request->id_rs,
        //     'province' => $request->province,
        //     'city' => $request->city,
        //     'date' => $request->date,
        //     'time' => $request->time,
        // ]);
    }
}
