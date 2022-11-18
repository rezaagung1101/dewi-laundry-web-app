<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('home',[
        "title"=>"Home"
    ]);
});

Route::get('/cekEstimasi', function () {
    return view('cekEstimasi',[
        "title"=>"Cek Estimasi"
    ]);
});
Route::get('/register', function () {
    return view('layouts/pengunjung/register',[
        "title"=>"Masuk"
    ]);
});
Route::get('/login', function () {
    return view('layouts/pengunjung/login',[
        "title"=>"Masuk"
    ]);
});
Route::get('/profile', function () {
    return view('profile'); 
});
