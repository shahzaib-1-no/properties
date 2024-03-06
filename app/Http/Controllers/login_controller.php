<?php

namespace App\Http\Controllers;

use App\Models\membership;
use App\Models\role_model;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Tymon\JWTAuth\Contracts\Providers\JWT;
use Tymon\JWTAuth\Facades\JWTAuth;

class login_controller extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required | email | regex:/@gmail\.com$/i',
            'password' => 'required',
            'member' => 'required|in:simple,verified,gold',
            'role' => 'required|in:2,3',
        ]);


        $data = membership::where('name', $request->member)->first();
        $member_id = $data->id;
        $register = User::create([
            'name' => $request['name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'email_verified_at' => now(),
            'password' => $request['password'],
            'remember_token' => Str::random(10),
            'role' => $request['role'],
            'membership' => $member_id,
        ]);

        if ($register) {
            Auth::login($register);
            if (Auth::User()->role == '2') {
                return redirect()->route('user');
            } else if (Auth::user()->role == '1') {
                dd('admin');
                // return redirect()->route('admin');
            }
             else if (Auth::user()->role == '3') {
                return redirect()->route('agent');
            }
        }
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required | email | regex:/@gmail\.com$/i',
            'password' => 'required',
        ]);
        if(Auth::attempt($request->only('email', 'password'))){
            if (Auth::User()->role == '2') {
                return redirect()->route('user')->with('msg', 'Welcome ' . Auth::user()->name);
            } else if (Auth::user()->role == '1') {
                dd('admin');
                // return redirect()->route('admin');
            }
             else if (Auth::user()->role == '3') {
                return redirect()->route('agent')->with('msg', 'Welcome ' . Auth::user()->name);

            }
        }else{
            return redirect()->route('login');
        }
        // if ($token = JWTAuth::attempt($request->only('email', 'password'))) {
        //     // Authentication successful
        //     // $tokens = $this->respondWithToken($token);
        //     // $user = Auth::user()->$tokens;
        //     // return view('dashboard.user',compact('user'));
        //     $tokens = $this->respondWithToken($token);
        //     $user = JWTAuth::user();
        //     return response()->json(['token'=>$tokens,'user'=>$user]);
        // }else{
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }
    }

    public function logout()
    {
        Auth::logout(); // Log out the user
        Session::flush();
         return redirect('/');
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
