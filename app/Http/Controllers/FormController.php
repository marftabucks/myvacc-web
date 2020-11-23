<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function index(){
        return view('user.vaccination-form');
    }
    public function store(Request $request){
        dd("ok");
        dd($request->nama);
        dd($request->hospital);
        dd($request->province);
        dd($request->city);
        dd($request->date);
        dd($request->time);
        
        // Form::create([
        //     'name' => $request->nama,
        //     'hospital' => $request->hospital,
        //     'province' => $request->province,
        //     'city' => $request->city,
        //     'date' => $request->date,
        //     'time' => $request->time,
        // ]);
    }
}
