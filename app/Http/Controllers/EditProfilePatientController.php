<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EditProfilePatientController extends Controller
{
    public function index(){

        if (Auth::user()) {
            if (Auth::user()->role == 'pasien') {
                $id = Auth::id();
                $pasien = Pasien::find($id);

                return view('user.edit-profile-patient',['pasien' => $pasien]);
            }
            else{
                return redirect()->intended('home');
            }
        }
        else {
            return redirect()->intended('home');
        }

    }

    public function store(Request $request){

        // dd($request);

        DB::table('pasiens')
        ->where('id', $request->id)
        ->update([
            'name' => $request->name,
            'nik' => $request->nik,
            ]);

        DB::table('users')
        ->where('id', $request->id)
        ->update([
            'name' => $request->name,
            ]);
        if($request->password != null){
            DB::table('users')
                ->where('id', $request->id)
                ->update([
                    'password' => Hash::make($request->password),
                    ]);
        } 

        return redirect()->intended('profile-patient');
    }
}
