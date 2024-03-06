<?php

namespace App\Http\Controllers;

use App\Models\exterior_features;
use App\Models\general_features;
use App\Models\Interior_features;
use App\Models\rent;
use App\Models\sell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class user_controller extends Controller
{
    public function user(Request $request)
    {
        

        $user = Auth::user()->name;
        // // $request->session()->get('_token');
        // $data = $request->query('data');
        // // Decode JSON data (if present)
        // $responseData = json_decode(urldecode($data), true);
        // $user = $responseData['user'] ?? null;
        // $token = $responseData['token'] ?? null;
        return  view('dashboard.user', compact('user'));
    }


    public function agent(){
        $user = Auth::user()->name;
        return  view('dashboard.agent', compact('user'));
    }

    public function add_listing (){
        $user = Auth::user()->name;
        return view('dashboard.listing.add_listing', compact('user'));
    }

    public function add_listing_template (){
        $sell = sell::get();
        $rent = rent::get();
        $general_features= general_features::get();
        $interior_features= Interior_features::get();
        $exterior_features= exterior_features::get();
        return view('dashboard.listing.add_listing',compact(['sell', 'rent' , 'general_features' , 'interior_features' , 'exterior_features']));
    }
}
