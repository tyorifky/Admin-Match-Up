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
    return view('index.main');
});

Route::get('/statistik', function () {
    return view('home.statistik', [
        "title" => 'statistik'
    ]);
});

Route::get('/pengguna', function () {
    return view('home.pengguna', [
        "title" => "pengguna"
    ]);
});

Route::get('/detailpengguna', function () {
    return view('home.detailpengguna', [
        "title" => "pengguna"
    ]);
});

Route::get('/kompetisi', function () {
    return view('home.kompetisi',[
        "title" => "kompetisi"
    ]);
});

Route::get('/peta', function () {
    return view('home.peta',[
        "title" => "peta"
    ]);
});
