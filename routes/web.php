<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});


Route::get('blog', function () {
    return view('blog');
});

Route::get('pertemuan1', function () {
    return view('pertemuan1');
});


Route::get('/pertemuan2/news', function () {
    return view('pertemuan2.news');
});

Route::get('/pertemuan2/news1', function () {
    return view('pertemuan2.news1');
});

Route::get('/pertemuan2/responsive', function () {
    return view('pertemuan2.responsive');
});


Route::get('pertemuan2', function () {
    return view('pertemuan2');
});

Route::get('pertemuan4', function () {
    return view('pertemuan4');
});

Route::get('pertemuan5', function () {
    return view('pertemuan5');
});


Route::get('linktree', function () {
    return view('linktree');
});


Route::get('index', function () {
    return view('index');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('makeover', function () {
    return view('makeover');
});

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);