@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'Detail Data Pegawai')

@section('konten')

<div class="card">
    <div class="card-header text-right">Detail Data Pegawai</div>
    <div class="card-body">
@foreach($pegawai as $p)

        <div class="row mt-3 justify-content-around">
          <label class="col-lg-3 form-label">Nama</label>
          <div class="col-lg-1" align='right'>
              :
          </div>
          <div class="col-lg-8">
            <label class="form-label">{{ $p->pegawai_nama }}</label>
          </div>
        </div>

        <div class="row my-3 justify-content-around">
          <label class="col-lg-3 form-label">Jabatan</label>
          <div class="col-lg-1" align='right'>
            :
         </div>
         <div class="col-lg-8">
            <label class="form-label">{{ $p->pegawai_jabatan }}</label>
          </div>
        </div>

         <div class="row mb-3 justify-content-around">
          <label class="col-lg-3 form-label ">Umur</label>
          <div class="col-lg-1" align='right'>
            :
        </div>
        <div class="col-lg-8">
            <label class="form-label">{{ $p->pegawai_umur }}</label>
          </div>
        </div>

        <div class="row justify-content-around">
          <label class="col-lg-3 form-label">Alamat</label>
          <div class="col-lg-1" align='right'>
              :
          </div>
          <div class="col-lg-8">
            <label class="form-label">{{ $p->pegawai_alamat }}</label>
          </div>
        </div>


        <div class="row mt-5">
            <div class="d-flex flex-lg-row flex-column justify-content-center">

            <div class="col-12" align='center'>
                <a href="/pegawai">
                    <button class="btn btn-secondary">
                    Kembali
                    </button>
                </a>
            </div>

        </div>

          @endforeach
    </div>
  </div>


@endsection
