@extends('layout.happy')
@section('title', 'Data tugas')
@section('judulhalaman', 'Tambah Data tugas')

@section('konten')
    <form action="/tugas/store" method="post">
        {{ csrf_field() }}

        <div class="card">
              <div class="card-header ">Form Tambah Data Tugas</div>
        <div class="card-body">

        <div class="container">

            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai </label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <select class="form-control" name="IDPegawai">
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
                            <input type='text' class="form-control" name="Tanggal" required="required" />
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
                        <label for="NamaTugas" class="col-sm-2 control-label">Nama Tugas</label>
                        <div class="'col-sm-4 input-group date">
                            <input type="text" class="form-control" required="required" id="NamaTugas" name="NamaTugas" >
                          </div>

                    </div>
                </div>
            </div>

             <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Status </label>
                        <div class="col-6">
                            <input type="radio" id="y" name="Status" value="Y">
                            <label for="y"><b>Selesai</b></label><br>
                        </div>
                        <div class="col-6">
                            <input type="radio" id="n" name="Status" value="N" checked="checked">
                            <label for="n"><b>Belum Selesai</b></label><br>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                <div class="d-flex flex-lg-row flex-column justify-content-center">

                <div class="col-5 d-flex flex-row-reverse">
                    <a href="/tugas">
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

