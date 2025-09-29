<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/pcr', function () {
    return 'selamat datang di website kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'hallo mahasiswa';
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/nama/{param1}', function ($param1) {
    return 'nama saya : '.$param1;
});

Route::get('/nim/{param1}', function ($param1 = '') {
    return 'nim saya : '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'nim saya : '.$param1;
});

Route::get('/matakuliah', function () {
    return 'menampilkan data matakuliah';
});

Route::get('/matakuliah', [MatakuliahController::class, 'index']);

Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);
