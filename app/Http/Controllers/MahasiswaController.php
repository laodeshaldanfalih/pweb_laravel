<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    //

    public function index()
    {
    	// mengambil data dari table pegawai
    	// $pegawai = DB::table('pegawai')->get(); // return array of objects

        // dipilih salan sati

        // mengambil data dari table pegawai per page
        $pegawai = DB::table('hasilstudi')->get();

    	// mengirim data pegawai ke view index
    	return view('indexmahasiswa',['pegawai' => $pegawai]);

    }

    public function tambah()
    {

	    // memanggil view tambah
	    return view('tambahmahasiswa');

    }

    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('hasilstudi')->insert([
            'id' => $request->id,
            'normorinduksiswa' => $request->normorinduksiswa,
            'nilaiangkaa' => $request->nilaiangkaa,
            'sks' => $request->sks
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/mahasiswa');

    }

    // public function view($id)
    // {
    //     // mengambil data pegawai berdasarkan id yang dipilih
    //     $pegawai = DB::table('hasilstudi')->where('id',$id)->get();
    //     // passing data pegawai yang didapat ke view edit.blade.php
    //     return view('view',['pegawai' => $pegawai]);

    // }
}
