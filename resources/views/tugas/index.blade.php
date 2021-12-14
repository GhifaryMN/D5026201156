@extends('layout.happy')
@section('title', 'Data Tugas')
@section('judulhalaman', 'Data Tugas ')

@section('konten')

<div class="container" align='center'>
	<form action="/pegawai/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari tugas .." value="{{ old('cari') }}">
		<input type="submit" class="btn btn btn-primary" value="CARI">
	</form>
</div>
<a class="btn btn-success"  href="/tugas/tambah"> + Tambah tugas Baru</a>
	<table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Tanggal</th>
                {{-- <th scope="col">Jabatan</th>
                <th scope="col">Umur</th> --}}
                <th scope="col">Nama Tugas</th>
                <th scope="col">Status</th>
                <th scope="col">Opsi</th>
            </tr>
        <thead>
        <tbody>
            @foreach($tugas as $t)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $t->pegawai_nama }}</td>
                <td>{{ $t->Tanggal }}</td>
                {{-- <td>{{ $t->tugas_jabatan }}</td>
                <td>{{ $t->tugas_umur }}</td> --}}
                <td>{{ $t->NamaTugas }}</td>
                <td>{{ $t->Status }}</td>
                <td>
                    <a href="/tugas/detail/{{ $t->ID }}">Detail</a>
                    |
                    <a href="/tugas/edit/{{ $t->ID }}">Edit</a>
                    |
                    <a href="/tugas/hapus/{{ $t->ID }}">Hapus</a>

                </td>
            </tr>
            @endforeach
        </tbody>
	</table>

    {{ $tugas->links()  }}

@endsection
