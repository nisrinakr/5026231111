<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SepedaDBController;
use App\Http\Controllers\keranjangbelanjaDBController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\TrafficController;


//kalo di java import java.io.*;

//kalo di java Route.get()
Route::get('/', function () {
    return view('welcome');
});

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello',[Coba::class, 'helloworld']);

Route::get('linktree', function () {
	return view('tugas-linktree-todolvr');
});

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('frontend', function () {
	return view('frontend');
});

//kumpulan link
Route::get('frontend', function () {
	return view('frontend');
});

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('bootstrap2', function () {
	return view('bootstrap2');
});

Route::get('homepage-teknisi', function () {
	return view('homepage_teknisi');
});

Route::get('linktree', function () {
	return view('tugas-linktree-todolvr');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js1', function () {
	return view('js2');
});


Route::get('ets', function () {
	return view('ets');
});

Route::get('dosen', [Coba::class,  'index']);


Route::get('/formulir', [PegawaiController::class, 'formulir']); //halaman isian
Route::post('/formulir/proses', [PegawaiController::class, 'proses']); //action form

//route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route CRUD

Route::get('/keranjangbelanja', [keranjangbelanjaDBController::class, 'index']);
Route::get('/keranjangbelanja/tambah', [keranjangbelanjaDBController::class, 'tambah']);
Route::post('/keranjangbelanja/store', [keranjangbelanjaDBController::class, 'store']);
Route::get('/keranjangbelanja/hapus/{id}', [keranjangbelanjaDBController::class, 'hapus']);


Route::get('/sepeda', [SepedaDBController::class, 'index']);

Route::get('/sepeda/tambah', [PegawaiDBController::class, 'tambah']);

Route::post('/sepeda/store',[PegawaiDBController::class, 'store']);

Route::get('/sepeda/edit/{id}',[PegawaiDBController::class, 'edit']);

Route::post('/sepeda/update',[PegawaiDBController::class, 'update']);

Route::get('/sepeda/hapus/{id}',[PegawaiDBController::class, 'hapus']);

Route::get('/sepeda/cari', [PegawaiDBController:: class, 'cari']);



Route::get('/pegawai', [PegawaiDBController::class, 'index']);

Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);

Route::post('/pegawai/store',[PegawaiDBController::class, 'store']);

Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);

Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);

Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController:: class, 'cari']);

Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
Route::get('/karyawan/tambah', [KaryawanController::class, 'create']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::delete('/karyawan/hapus/{kodepegawai}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');

Route::get('/pagecounter', [TrafficController::class, 'index']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

