@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'Tambah Data Absen')

@section('konten')
    <form action="/absen/store" method="post">
        {{ csrf_field() }}

        <div class="card">
              <div class="card-header ">Form Tambah Data Absen Pegawai</div>
        <div class="card-body">

        <div class="container">

            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai </label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <select class="form-control" name="idpegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal </label>
                        <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                            <input type='text' class="form-control" name="tanggal" required="required" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function() {
                        $('#dtpickerdemo').datetimepicker({
                            format: "YYYY-MM-DD hh:mm:ss",
                            "defaultDate": new Date(),
                            locale : "id"
                        });
                    });
                </script>
            </div>


             <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Status </label>
                        <div class="col-6">
                            <input type="radio" id="h" name="status" value="H">
                            <label for="h"><b>HADIR</b></label><br>
                        </div>
                        <div class="col-6">
                            <input type="radio" id="a" name="status" value="A" checked="checked">
                            <label for="a"><b>TIDAK HADIR</b></label><br>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                <div class="d-flex flex-lg-row flex-column justify-content-center">

                <div class="col-5 d-flex flex-row-reverse">
                    <a href="/absen">
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


        </div>

                </div>
                </div>
        </div>
    </form>
@endsection
