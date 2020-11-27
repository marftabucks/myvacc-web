<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RS;
use Illuminate\Support\Facades\Auth;

class PemerintahHospitalController extends Controller
{
    public function index(){

        if (Auth::user()) {
            if (Auth::user()->role == 'pemerintah') {
                $hospitals = DB::table('r_s')
                     ->select(DB::raw('id, name, province, city, address'))
                     ->orderBy('province')
                     ->orderBy('city')
                     ->orderBy('name')
                     ->get();
                return view('pemerintah.dashboard-pemerintah-hospitals',['hospitals' => $hospitals]);
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
        $id = $request->id;

        $hospital = RS::find($id);
        return view('pemerintah.edit-hospital',['hospital' => $hospital]);
    }
}
