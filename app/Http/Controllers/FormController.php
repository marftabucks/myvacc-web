<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function index(){
        return view('user.vaccination-form');
    }
    public function store(Request $request){
        echo(Auth::id());
        echo($request->nama);
        echo($request->hospital);
        echo($request->province);
        echo($request->city);
        echo($request->date);
        echo($request->time);
        
        Form::create([
            'id_user' => Auth::id() ,
            'name' => $request->name,
            'id_rs' => 1,
            'hospital' => $request->hospital,
            'province' => $request->province,
            'city' => $request->city,
            'date' => $request->date,
            'time' => $request->time,
        ]);

        echo('form added');
    }
}
