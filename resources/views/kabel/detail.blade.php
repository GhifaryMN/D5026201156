@extends('layout.happy')
@section('title', 'Data kabel')
@section('judulhalaman', 'Detail Data kabel')

@section('konten')

<div class="card">
    <div class="card-header text-right">Detail Data kabel</div>
    <div class="card-body">
@foreach($kabel as $k)

        <div class="row mt-3 justify-content-around">
          <label class="col-lg-3 form-label">Merk Kabel</label>
          <div class="col-lg-1" align='right'>
              :
          </div>
          <div class="col-lg-8">
            <label class="form-label">{{ $k->merkkabel }}</label>
          </div>
        </div>

        <div class="row my-3 justify-content-around">
          <label class="col-lg-3 form-label">Stock Kabel</label>
          <div class="col-lg-1" align='right'>
            :
         </div>
         <div class="col-lg-8">
            <label class="form-label">{{ $k->stockkabel }}</label>
          </div>
        </div>

         <div class="row mb-3 justify-content-around">
          <label class="col-lg-3 form-label ">Tersedia</label>
          <div class="col-lg-1" align='right'>
            :
        </div>
        <div class="col-lg-8">
            <label class="form-label">{{ $k->tersedia }}</label>
          </div>
        </div>

        <div class="row mt-5">
            <div class="d-flex flex-lg-row flex-column justify-content-center">

            <div class="col-12" align='center'>
                <a href="/kabel">
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
