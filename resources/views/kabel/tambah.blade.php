@extends('layout.happy')
@section('title', 'Data kabel')
@section('judulhalaman', 'Tambah Data kabel')

@section('konten')

<div class="card">
    <div class="card-header text-right">Form Tambah Data kabel</div>
    <div class="card-body">

      <form action="/kabel/store" method="POST" id="validation" class="row g-3">
        {{ csrf_field() }}
        <div class="row mt-3 justify-content-around">
          <label class="col-lg-5 form-label">
            Merk Kabel
          </label>
          <div class="col-lg-7">
            <input type="text" class="form-control" required="required" id="merkkabel" name="merkkabel" >
          </div>
        </div>

        <div class="row my-3 justify-content-around">
          <label class="col-lg-5 form-label">
            Stock Kabel
          </label>
          <div class="col-lg-7">
            <input type="number" class="form-control" required="required" name="stockkabel" id="stockkabel" >
          </div>
        </div>

        <div class="row mb-3 justify-content-around">
            <label class="col-lg-5 form-label ">Tersedia</label>
               <div class='col-6' id='tersedia'>
                    <input type="radio" id="y" name="tersedia" value="Y">
                   <label for="y">YA</label>
               <div class='col-6' id='tersedia'>
                   <input type="radio" id="t" name="tersedia" value="T" checked="checked" >
                   <label for="t">TIDAK</label><br>
               </div>
           </div>
       </div>

        <div class="row mt-5">
            <div class="d-flex flex-lg-row flex-column justify-content-center">

            <div class="col-5 d-flex flex-row-reverse">
                <a href="/kabel">
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
