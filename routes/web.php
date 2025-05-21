<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
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

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']); //halaman isian
Route::post('/formulir/proses', [PegawaiController::class, 'proses']); //action form

//route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
