<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\MahasiswaController;

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

Route::controller(PegawaiController::class)->group(function () {

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

Route::controller(MahasiswaController::class)->group(function () {

    //route CRUD
    Route::get('/mahasiswa','App\Http\Controllers\MahasiswaController@index');
    Route::get('/mahasiswa/tambah','App\Http\Controllers\MahasiswaController@tambah');
    Route::post('/mahasiswa/store','App\Http\Controllers\MahasiswaController@store');
    // view
    Route::get('/mahasiswa/view/{id}','App\Http\Controllers\MahasiswaController@view');
});


