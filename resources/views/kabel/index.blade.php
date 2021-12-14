@extends('layout.happy')
@section('title', 'Data kabel')
@section('judulhalaman', 'Data kabel PT MAJU SEJAHTERA')

@section('konten')

<div class="container" align='center'>
	<form action="/kabel/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari kabel .." value="{{ old('cari') }}">
		<input type="submit" class="btn btn btn-primary" value="CARI">
	</form>
</div>

<a class="btn btn-success" href="/kabel/tambah"> + Tambah kabel Baru</a>
	<table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Merk Kabel</th>
                <th scope="col">Stock Kabel</th>
                <th scope="col">Tersedia</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
		<tbody>

		@foreach($kabel as $k)
		<tr >

            <td>{{ $k->merkkabel }}</td>
			<td>{{ $k->stockkabel }}</td>
			<td>{{ $k->tersedia }}</td>
			<td>
                <a href="/kabel/detail/{{ $k->kodekabel}}">View Detail</a>
                |
				<a href="/kabel/edit/{{ $k->kodekabel}}">Edit</a>
				|
				<a href="/kabel/hapus/{{ $k->kodekabel}}">Hapus</a>
			</td>
		</tr>
		@endforeach

        </tbody>
	</table>

        {{ $kabel->links()  }}

@endsection
