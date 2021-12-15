<?php

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

// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tugas4', function () {
    return view('tugas4js') ;
});

Route::get('praktikum2', function () {
    return view('praktikum2js') ;
});


// melalui controller
Route::get('etspweb', "ViewController@showETS") ;

Route::get('greetings', "ViewController@showGreetings") ;
Route::post('sayhi', "ViewController@sayHi") ;

// create CRUD
Route::get('/pegawai', "PegawaiController@index") ;

Route::get('/pegawai/tambah','PegawaiController@tambah');

Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');

Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/cari','PegawaiController@cari');

Route::get('/pegawai/detail/{id}','PegawaiController@view');

//route CRUD Tabel TUGAS
Route::get('/tugas','TugasController@index');

Route::get('/tugas/tambah','TugasController@tambah');

Route::post('/tugas/store','TugasController@store');

Route::get('/tugas/edit/{id}','TugasController@edit');

Route::post('/tugas/update','TugasController@update');

Route::get('/tugas/hapus/{id}','TugasController@hapus');

Route::get('/tugas','TugasController@index');

Route::get('/tugas/cari','TugasController@cari');

Route::get('/tugas/detail/{id}','TugasController@view');

//route CRUD Tabel ABSEN
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route CRUD Tabel KABEL
Route::get('/kabel','KabelController@index');
Route::get('/kabel/tambah','KabelController@tambah');
Route::post('/kabel/store','KabelController@store');
Route::get('/kabel/edit/{id}','KabelController@edit');
Route::post('/kabel/update','KabelController@update');
Route::get('/kabel/hapus/{id}','KabelController@hapus');
Route::get('/kabel','KabelController@index');
Route::get('/kabel/cari','KabelController@cari');
Route::get('/kabel/detail/{id}','KabelController@view');

//route CRUD Tabel keranjangbelanja
Route::get('/keranjangbelanja','keranjangBelanjaController@index');
Route::get('/keranjangbelanja/tambah','keranjangBelanjaController@tambah');
Route::post('/keranjangbelanja/store','keranjangBelanjaController@store');
// Route::get('/keranjangbelanja/edit/{id}','keranjangBelanjaController@edit');
Route::post('/keranjangbelanja/update','keranjangBelanjaController@update');
Route::get('/keranjangbelanja/hapus/{id}','keranjangBelanjaController@hapus');
Route::get('/keranjangbelanja','keranjangBelanjaController@index');

