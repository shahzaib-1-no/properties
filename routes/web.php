<?php

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

