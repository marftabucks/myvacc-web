<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RS;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PemerintahEditHospitalController extends Controller
{
    public function index(Request $request){

        if (Auth::user()) {
            if (Auth::user()->role == 'pemerintah') {

                $id = $request->id;
                $hospital = RS::find($id);

                return view('pemerintah.edit-hospital',['hospital' => $hospital]);
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
        if($request->submit == "Delete"){
            DB::table('r_s')->where('id', '=', $request->id)->delete();
            DB::table('users')->where('id', '=', $request->id)->delete();
        }
        else{
            DB::table('r_s')
              ->where('id', $request->id)
              ->update([
                  'name' => $request->name,
                  'province' => $request->province,
                  'city' => $request->city,
                  'address' => $request->address, 
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
            
        }

        return redirect()->intended('pemerintah-hospitals');
    }
}
