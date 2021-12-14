@extends('layout.happy')
@section('title', 'Data tugas')
@section('judulhalaman', 'Edit Data tugas')

@section('konten')

	<br/>
    <h3>{{ $status }}</h3>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $t->ID }}">
        <div class="card">
              <div class="card-header ">Form Edit Data Tugas</div>
        <div class="card-body">

        <div class="container">
            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <select class="form-control" name="IDPegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}" @if($p->pegawai_id===$t->IDPegawai) selected="selected" @endif> {{ $p->pegawai_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="datetimepicker2" class="col-sm-2 control-label">Tanggal </label>
                        <div class='col-sm-4 input-group date' id='datetimepicker2'>
                            <input type='text' class="form-control" name="Tanggal" required="required" value="{{ $t->Tanggal }}"/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function() {
                        $('#datetimepicker2').datetimepicker({
                            format: "YYYY-MM-DD hh:mm:ss",
                            "defaultDate": new Date(),
                            locale : 'id'
                        });
                    });
                </script>
            </div>

            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Tugas</label>
                        <div class='col-sm-4 input-group date' id='nama'>

                            <input type="text" class="form-control" required="required" id="NamaTugas" name="NamaTugas" value="{{ $t->NamaTugas }}">

                        </div>
                    </div>
                </div>
            </div>

             <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Status </label>
                        <div class='col-6' id='nama'>
                            <input type="radio" id="y" name="Status" value="Y" @if($t->Status==='Y') checked="checked" @endif>
                            <label for="y">Selesai</label>
                        <div class='col-6' id='nama'>
                            <input type="radio" id="n" name="Status" value="N" checked="checked" @if($t->Status==='N') checked="checked" @endif>
                            <label for="n">Belum Selesai</label><br>
                        </div>
                        </div>
                    </div>
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


        </div>

                </div>
                </div>
        </div>
    </form>
	@endforeach

    @endsection

