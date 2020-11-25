<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RS;

class PemerintahHospitalController extends Controller
{
    public function index(){

        $hospitals = DB::table('r_s')
                     ->select(DB::raw('id, name, province, city, address'))
                     ->orderBy('province')
                     ->orderBy('city')
                     ->orderBy('name')
                     ->get();

                     
        return view('pemerintah.dashboard-pemerintah-hospitals',['hospitals' => $hospitals]);
    }
}
