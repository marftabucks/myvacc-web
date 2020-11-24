<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RS;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PemerintahAddHospitalController extends Controller
{
    public function index(){
        return view('pemerintah.add-hospital');
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

        RS::create([
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