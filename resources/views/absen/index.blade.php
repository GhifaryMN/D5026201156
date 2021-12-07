@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'Data Absen Pegawai Trafe')

@section('konten')


	<table  class="table">
		<tr  class="table-success">
				<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
			@foreach($absen as $a)
		<tr >
           <td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID}}">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

		<a class="btn btn-success" href="/absen/tambah"> + Tambah Absen Baru</a>



@endsection
