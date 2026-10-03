<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

//1
Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
})->name('bahaya');

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});


//2
Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});



//3 
Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

//halaman about
Route::get('/about', function () {
    return view('halaman-about');
});



