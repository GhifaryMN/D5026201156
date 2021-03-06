<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TugasController extends Controller
{
    public function index()
    {
        // mengambil data dari table tugas
        // $tugas = DB::table('tugas')->get();
        $tugas = DB::table('tugas')
        ->join('pegawai', 'tugas.ID', '=', 'pegawai.pegawai_id')
        ->select('tugas.*', 'pegawai.pegawai_nama')
        ->paginate(3);

        // mengirim data tugas ke view index
        return view('tugas.index', ['tugas' => $tugas]);
    }

    // method untuk menampilkan view form tambah tugas
    public function tambah()
    {

        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        // memanggil view tambah
        return view('tugas.tambah', ['pegawai' => $pegawai]);
    }

    // method untuk insert data ke table tugas
    public function store(Request $request)
    {
        // insert data ke table tugas
        DB::table('tugas')->insert([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->Tanggal,
            'NamaTugas' => $request->NamaTugas,
            'Status' => $request->Status
        ]);
        // alihkan halaman ke halaman tugas
        return redirect('/tugas');
    }

    // method untuk edit data tugas
    public function edit($id)
    {
        // mengambil data tugas berdasarkan id yang dipilih
	    $tugas = DB::table('tugas')->where('ID',$id)->get();

        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        $Status = "Sedang Mengedit" ;
        // mengambil data tugas berdasarkan id yang dipilih
        $tugas = DB::table('tugas')->where('ID', $id)->get();
        // passing data tugas yang didapat ke view edit.blade.php
	return view('tugas.edit',['tugas' => $tugas,'pegawai' => $pegawai,'status' => $Status]);
    }

    // update data tugas
    public function update(Request $request)
    {
        // update data tugas
        DB::table('tugas')->where('ID', $request->id)->update([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->Tanggal,
            'NamaTugas' => $request->NamaTugas,
            'Status' => $request->Status
        ]);
        // alihkan halaman ke halaman tugas
        return redirect('/tugas');
    }

    // method untuk hapus data tugas
    public function hapus($id)
    {
        // menghapus data tugas berdasarkan id yang dipilih
        DB::table('tugas')->where('ID', $id)->delete();

        // alihkan halaman ke halaman tugas
        return redirect('/tugas');
    }

    public function cari(Request $request)
{
    // menangkap data pencarian
    $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
    $tugas = DB::table('tugas')
    ->where('Tanggal','like',"%".$cari."%") //syntax yang biasa pada database (phpmyadmin)
    ->orWhere('NamaTugas','like',"%".$cari."%")
    ->orWhere('Status','like',"%".$cari."%")
    ->paginate();

        // mengirim data tugas ke view index
    return view('tugas.index',['tugas' => $tugas]);

}

// method untuk view detail data tugas
public function view($id)
{
	// mengambil data tugas berdasarkan id yang dipilih
	$tugas = DB::table('tugas')->where('ID',$id)->get();
	// passing data tugas yang didapat ke view index.blade.php
	return view('tugas.detail',['tugas' => $tugas]);
}

}
