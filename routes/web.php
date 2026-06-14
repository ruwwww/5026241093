<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\PensilController;
use App\Http\Controllers\SiswaController;
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
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);
Route::get('/pegawaitambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore', [PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/pensil', [PensilController::class, 'index']);
Route::get('/pensilcari', [PensilController::class, 'cari']);
Route::get('/pensiltambah', [PensilController::class, 'tambah']);
Route::post('/pensilstore', [PensilController::class, 'store']);
Route::get('/pensiledit{id}', [PensilController::class, 'edit']);
Route::post('/pensilupdate', [PensilController::class, 'update']);
Route::get('/pensilhapus/{id}', [PensilController::class, 'hapus']);

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index'])->name('keranjangbelanja.index');
Route::get('/keranjangbelanja/create', [KeranjangBelanjaController::class, 'create'])->name('keranjangbelanja.create');
Route::post('/keranjangbelanja', [KeranjangBelanjaController::class, 'store'])->name('keranjangbelanja.store');
Route::delete('/keranjangbelanja/{id}', [KeranjangBelanjaController::class, 'destroy'])->name('keranjangbelanja.destroy');

Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilaikuliah/create', [NilaiKuliahController::class, 'create'])->name('nilaikuliah.create');
Route::post('/nilaikuliah', [NilaiKuliahController::class, 'store'])->name('nilaikuliah.store');