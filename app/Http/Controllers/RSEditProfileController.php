<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RS;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RSEditProfileController extends Controller
{
    public function index(){
        if (Auth::user()) {
            if (Auth::user()->role == 'rs') {
                $id = Auth::id();
                $hospital = RS::find($id);

                return view('rs.edit-profile-hospital',['hospital' => $hospital]);
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
        

        return redirect()->intended('rs-profile');
    }

}
 