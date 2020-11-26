<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EditProfilePatientController extends Controller
{
    //user/edit-profile-patient
    public function index(){
        $id = Auth::id();
        $pasien = Pasien::find($id);

        return view('user.edit-profile-patient',['pasien' => $pasien]);
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
