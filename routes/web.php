<?php

use App\Http\Controllers\login_controller;
use App\Http\Controllers\user_controller;
use App\Http\Middleware\user;
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
});

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
    return view('auth.sign_up');
});
Route::post('/register', [login_controller::class,'register'])->name('register');
Route::post('login',[login_controller::class,'login'])->name('login');
Route::get('user',[user_controller::class,'user'])->middleware('user')->name('user');

