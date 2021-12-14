<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class kabelController extends Controller
{
    public function index()
    {
        // mengambil data dari table kabel
        $kabel = DB::table('kabel')->paginate(5);

        // mengirim data kabel ke view index
        return view('kabel.index', ['kabel' => $kabel]);
    }

    // method untuk menampilkan view form tambah kabel
    public function tambah()
    {
        $kabel = DB::table('kabel')->orderBy('merkkabel', 'asc')->get();

        // memanggil view tambah
        return view('kabel.tambah',['kabel' => $kabel]);
    }

    // method untuk insert data ke table kabel
    public function store(Request $request)
    {
        // insert data ke table kabel
        DB::table('kabel')->insert([
            'merkkabel' => $request->merkkabel,
            'stockkabel' => $request->stockkabel,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman kabel
        return redirect('/kabel');
    }

    // method untuk edit data kabel
    public function edit($id)
    {
        // mengambil data kabel berdasarkan id yang dipilih
        $kabel = DB::table('kabel')->where('kodekabel', $id)->get();
        // passing data kabel yang didapat ke view edit.blade.php
        return view('kabel.edit', ['kabel' => $kabel]);
    }

    // update data kabel
    public function update(Request $request)
    {
        // update data kabel
        DB::table('kabel')->where('kodekabel', $request->id)->update([
            'merkkabel' => $request->merkkabel,
            'stockkabel' => $request->stockkabel,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman kabel
        return redirect('/kabel');
    }

    // method untuk hapus data kabel
    public function hapus($id)
    {
        // menghapus data kabel berdasarkan id yang dipilih
        DB::table('kabel')->where('kodekabel', $id)->delete();

        // alihkan halaman ke halaman kabel
        return redirect('/kabel');
    }

    public function cari(Request $request)
    {
    // menangkap data pencarian
    $cari = $request->cari;

        // mengambil data dari table kabel sesuai pencarian data
    $kabel = DB::table('kabel')
    ->where('merkkabel','like',"%".$cari."%") //syntax yang biasa pada database (phpmyadmin)
    ->orWhere('stockkabel','like',"%".$cari."%")
    ->orWhere('tersedia','like',"%".$cari."%")
    ->paginate();

        // mengirim data kabel ke view index
    return view('kabel.index',['kabel' => $kabel]);

    }

// method untuk view detail data kabel
public function view($id)
    {
	// mengambil data kabel berdasarkan id yang dipilih
	$kabel = DB::table('kabel')->where('kodekabel',$id)->get();
	// passing data kabel yang didapat ke view index.blade.php
	return view('kabel.detail',['kabel' => $kabel]);
    }

}
