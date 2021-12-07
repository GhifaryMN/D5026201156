@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'Tambah Data Pegawai')

@section('konten')

<div class="card">
    <div class="card-header text-right">Form Tambah Data Pegawai</div>
    <div class="card-body">

      <form action="/pegawai/store" method="POST" id="validation" class="row g-3">
        {{ csrf_field() }}
        <div class="row mt-3 justify-content-around">
          <label class="col-lg-5 form-label">
            Nama
          </label>
          <div class="col-lg-7">
            <input type="text" class="form-control" required="required" id="name" name="nama" >
          </div>
        </div>

        <div class="row my-3 justify-content-around">
          <label class="col-lg-5 form-label">
            Jabatan
          </label>
          <div class="col-lg-7">
            <input type="text" class="form-control" required="required" name="jabatan" id="jabatan" >
          </div>
        </div>

         <div class="row mb-3 justify-content-around">
          <label class="col-lg-5 form-label">
            Umur
          </label>
          <div class="col-lg-7">
            <input type="number" class="form-control" required="required" name="umur" id="umur" >
          </div>
        </div>

        <div class="row justify-content-around">
          <label class="col-lg-5 form-label">
            Alamat
          </label>
          <div class="col-lg-7">
            <textarea required="required" name="alamat" class="form-control"></textarea>
          </div>
        </div>


        <div class="row mt-5">
            <div class="d-flex flex-lg-row flex-column justify-content-center">

            <div class="col-5 d-flex flex-row-reverse">
                <a href="/pegawai">
                    <button class="btn btn-secondary">
                    Kembali
                    </button>
                </a>
            </div>
            <div class="col-1"></div>
            <div class="col-5">
                <input type="submit" class="btn btn btn-success" value="Simpan Data" >
            </div>

            </div>
        </div>
      </form>

    </div>
  </div>

@endsection
