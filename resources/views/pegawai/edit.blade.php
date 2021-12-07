@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'Edit Data Pegawai')

@section('konten')

<div class="card">
    <div class="card-header text-right">Form Edit Data Pegawai</div>
    <div class="card-body">
@foreach($pegawai as $p)
      <form action="/pegawai/update" method="POST" id="validation" class="row g-3">
        {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
        <div class="row mt-3 justify-content-around">
          <label class="col-lg-5 form-label">Nama</label>
          <div class="col-lg-7">
            <input type="text" class="form-control" required="required" id="name" name="nama" value="{{ $p->pegawai_nama }}">
          </div>
        </div>

        <div class="row my-3 justify-content-around">
          <label class="col-lg-5 form-label">Jabatan</label>
          <div class="col-lg-7">
            <input type="text" class="form-control" required="required" name="jabatan" id="jabatan" value="{{ $p->pegawai_jabatan }}">
          </div>
        </div>

         <div class="row mb-3 justify-content-around">
          <label class="col-lg-5 form-label ">Umur</label>
          <div class="col-lg-7">
            <input type="number" class="form-control" required="required" name="umur" id="umur" value="{{ $p->pegawai_umur }}">
          </div>
        </div>

        <div class="row justify-content-around">
          <label class="col-lg-5 form-label">Alamat</label>
          <div class="col-lg-7">
            <textarea required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }}</textarea>
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
          @endforeach
    </div>
  </div>


@endsection
