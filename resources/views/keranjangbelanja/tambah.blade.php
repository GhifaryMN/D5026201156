@extends('layout.happy')
@section('title', 'Data keranjang barang')
@section('judulhalaman', 'Tambah Data keranjang barang')

@section('konten')

<div class="card">
    <div class="card-header text-right">Form Tambah Data Keranjang Barang</div>
    <div class="card-body">

      <form action="/keranjangbelanja/store" method="POST" id="validation" class="row g-3">
        {{ csrf_field() }}
        <div class="row mt-3 justify-content-around">
          <label class="col-lg-5 form-label">
            Kode Barang
          </label>
          <div class="col-lg-7">
            <input type="text" class="form-control" required="required" id="KodeBarang" name="KodeBarang" >
          </div>
        </div>

        <div class="row my-3 justify-content-around">
          <label class="col-lg-5 form-label">
            Jumlah
          </label>
          <div class="col-lg-7">
            <input type="text" class="form-control" required="required" name="Jumlah" id="Jumlah" >
          </div>
        </div>

        <div class="row my-3 justify-content-around">
            <label class="col-lg-5 form-label">
              Harga
            </label>
            <div class="col-lg-7">
              <input type="text" class="form-control" required="required" name="Harga" id="Harga" >
            </div>
        </div>

        <div class="row mt-5">
            <div class="d-flex flex-lg-row flex-column justify-content-center">

            <div class="col-5 d-flex flex-row-reverse">
                <a href="/keranjangbelanja">
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
