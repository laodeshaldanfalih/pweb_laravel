<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;

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
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
	return view('blog');
});

Route::controller(PegawaiDBController::class)->group(function () {
    // Route::get('/dosen', 'App\Http\Controllers\DosenController@index');
    // Route::get('/pegawai/{name}', 'App\Http\Controllers\PegawaiController@index');

    // Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
    // Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

    // // route blog
    // Route::get('/blog', 'App\Http\Controllers\BlogController@home');
    // Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
    // Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

    //route CRUD
    Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
    Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
    Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
    Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
    Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
    Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
    Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

    // view
    Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
});


