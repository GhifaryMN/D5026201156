@extends('layout.happy')
@section('title', 'Data keranjangbelanja')
@section('judulhalaman', 'Data Keranjang Belanja BukaWarung')

@section('konten')


<a class="btn btn-success" href="/keranjangbelanja/tambah"> Beli </a>
	<table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Kode Pembelian</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Jumlah Pembelian</th>
                <th scope="col">Harga per item</th>
                <th scope="col">Total</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
		<tbody>

		@foreach($keranjangbelanja as $k)
		<tr >
            <td>{{ $loop->iteration }}</td>
            <td>{{ $k->KodeBarang }}</td>
			<td>{{ $k->Jumlah }}</td>
            <td>{{ number_format($k->Harga, 0, ',', '.') }}</td>
            <td>{{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
			<td>
				<a href="/keranjangbelanja/hapus/{{ $k->ID}}">Batal</a>
			</td>
		</tr>
		@endforeach

        </tbody>
	</table>


@endsection
