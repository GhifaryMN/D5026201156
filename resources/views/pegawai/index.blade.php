@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'Data Pegawai Trafe')

@section('konten')

<div class="container" align='center'>
	<form action="/pegawai/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input type="submit" class="btn btn btn-primary" value="CARI">
	</form>
</div>

<a class="btn btn-success"  href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
	<table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                {{-- <th scope="col">Jabatan</th>
                <th scope="col">Umur</th> --}}
                <th scope="col">Alamat</th>
                <th scope="col">Opsi</th>
            </tr>
        <thead>
        <tbody>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->pegawai_nama }}</td>
                {{-- <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td> --}}
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/detail/{{ $p->pegawai_id }}">View Detail</a>
                    |
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>

                </td>
            </tr>
            @endforeach
        </tbody>
	</table>



    {{ $pegawai->links()  }}

@endsection
