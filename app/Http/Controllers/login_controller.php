<?php

namespace App\Http\Controllers;

use App\Models\membership;
use App\Models\role_model;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class login_controller extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required | email | regex:/@gmail\.com$/i',
            'password' => 'required',
            'member' => 'required|in:simple,verified,gold',
        ]);
         
        $data = membership::where('name',$request->member)->first();
        $member_id =$data->id;
        $register = User::create([
            'name' => $request['name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'email_verified_at' => now(),
            'password' => $request['password'],
            'remember_token' => Str::random(10),
            'role' => '2',
            'membership' => $member_id ,
        ]);

        if($register){
            Auth::login($register);
            $user = Auth::User();
            session(['user' => $user]);
            if(Auth::User()->role== '2'){
                return redirect()->route('user');
            }else if(Auth::user()->role=='1'){
                return redirect()->route('admin');

            }
        }
    }

    public function login (Request $request){
        $request->validate([
            'email' => 'required | email | regex:/@gmail\.com$/i',
            'password' => 'required',
        ]);
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
        
        $check = Auth::attempt($credentials);
        if ( $check ) {
            $user = Auth::user();
            session(['user' => $user]);
            if(Auth::User()->role== '2'){
                return redirect()->route('user');
            }else if(Auth::user()->role=='1'){
                return redirect()->route('admin');

            }
        }else{
            return redirect()->back();
        }
    }
}
