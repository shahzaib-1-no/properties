<?php

use App\Http\Controllers\login_controller;
use App\Http\Controllers\user_controller;
use App\Http\Middleware\user;
use App\Models\membership;
use App\Models\role_model;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.home');
})->name('/');

Route::get('blog',function (){
    return view('blog.blog');
});
Route::get('contact',function (){
    return view('contact.contact');
});

Route::get('/about', function () {
    return view('about.about-us');
});

Route::get('/services', function () {
    return view('services.services');
});

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/sign_up', function () {
    $role= role_model::where('role_name','!=','admin')->get();
    return view('auth.sign_up',compact('role'));
});
Route::post('/register', [login_controller::class,'register'])->name('register');
Route::post('login',[login_controller::class,'login'])->name('login');
Route::get('user',[user_controller::class,'user'])->name('user')->middleware('auth');
Route::get('agent',[user_controller::class,'agent'])->name('agent')->middleware('auth','agent');
Route::get('logout',[login_controller::class,'logout'])->name('logout')->middleware('auth');

// // Route::get('user',[user_controller::class,'user'])->middleware('user')->name('user');
Route::middleware('auth','agent')->group(function () {
    Route::get('add_listing_template',[user_controller::class,'add_listing_template'])->name('add_listing_template');
    Route::get('add_listing',[user_controller::class,'add_listing'])->name('add_listing');

});