@extends('layout.happy')
@section('title', 'Data tugas')
@section('judulhalaman', 'Detail Data tugas')

@section('konten')

<div class="card">
    <div class="card-header text-right">Detail Data tugas</div>
    <div class="card-body">
@foreach($tugas as $t)

        <div class="row my-3 justify-content-around">
            <label class="col-lg-3 form-label">Tanggal</label>
            <div class="col-lg-1" align='right'>
            :
        </div>
        <div class="col-lg-8">
            <label class="form-label">{{ $t->Tanggal }}</label>
            </div>
        </div>

        <div class="row mt-3 justify-content-around">
          <label class="col-lg-3 form-label">Nama Tugas</label>
          <div class="col-lg-1" align='right'>
              :
          </div>
          <div class="col-lg-8">
            <label class="form-label">{{ $t->NamaTugas }}</label>
          </div>
        </div>

         <div class="row mb-3 justify-content-around">
          <label class="col-lg-3 form-label ">Status</label>
          <div class="col-lg-1" align='right'>
            :
        </div>
        <div class="col-lg-8">
            <label class="form-label">{{ $t->Status }}</label>
          </div>
        </div>

        <div class="row mt-5">
            <div class="d-flex flex-lg-row flex-column justify-content-center">

            <div class="col-12" align='center'>
                <a href="/tugas">
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
