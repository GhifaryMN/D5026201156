@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'Data Absen Pegawai Trafe')

@section('konten')

<a class="btn btn-success" href="/absen/tambah"> + Tambah Absen Baru</a>
	<table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Status</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
		<tbody>

		@foreach($absen as $a)
		<tr >

            <td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID}}">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID}}">Hapus</a>
			</td>
		</tr>
		@endforeach

        </tbody>
	</table>

        {{ $absen->links()  }}

@endsection
