@extends('template')
@section('content')

	<h3>Keranjang Belanja</h3>
	<br/>


	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>

		@foreach($keranjangbelanja as $k)
		<tr>
			<td>{{ $k->KodeBarang }}</td>
			<td>{{ $k->Jumlah }}</td>
            <td>{{ number_format($k->Harga, 0, ',', '.') }}</td>
            <td>{{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
            <td>
                <a href="/keranjangbelanja/tambah" class="btn btn-success">+ Beli</a>
				<a href="/keranjangbelanja/hapus/{{ $k->ID }}" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus item ini?')">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>

	{{ $keranjangbelanja->links() }}

@endsection
