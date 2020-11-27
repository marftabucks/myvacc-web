<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RS;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PemerintahAddHospitalController extends Controller
{
    public function index(){

        if (Auth::user()) {
            if (Auth::user()->role = 'pemerintah') {

                return view('pemerintah.add-hospital');
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
        // Storing data to database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'rs'
        ]);
        // name email password province city address
            
        $id_rs = DB::table('users')->select(DB::raw('id'))->where('email','=',$request->email)->get();

        $id_rs = $id_rs[0]->id;

        RS::create([
            'id' => $id_rs,
            'name' => $request->name,
            'email' => $request->email,
            'province' => $request->province,
            'city' => $request->city,
            'address' => $request->address,
        ]);
        print('RS Added');
        return redirect()->intended('add-hospital');
    }
}