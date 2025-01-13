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
    return view('home');
});

Route::get('/tentang-kami', function () {
    return view('tentangkami');
});

Route::get('/layanan-kami', function () {
    return view('layanankami');
});
Route::get('/artikel', function () {
    return view('artikel');
});
Route::get('/hubungi-kami', function () {
    return view('hubungikami');
});
Route::get('/daftar-online', function () {
    return view('daftaronline');
});