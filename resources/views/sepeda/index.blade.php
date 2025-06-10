@extends('template')
@section('content')

	<h3>Data Sepeda</h3>

	<a href="/sepeda/tambah" class="btn btn-primary mb-3"> + Tambah Sepeda Baru</a>

    <p>Cari Data Sepeda :</p>
	<form action="/sepeda/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Sepeda ..">
		<input type="submit" value="CARI" class="btn btn-info mt-3">
	</form>

	<br/>


	<table class="table table-striped table-hover">
		<tr>
			<th>Merk Sepeda</th>
			<th>Harga Sepeda</th>
			<th>Tersedia(Y/N)</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($sepeda as $s)
		<tr>
			<td>{{ $s->merksepeda }}</td>
			<td>{{ $s->hargasepeda }}</td>
            <td>{{ $s->tersedia == 1 ? 'Y' : 'N' }}</td>
			<td>{{ $s->berat }}</td>
            <td>
                <a href="/sepeda/edit/{{ $s->id }}" class="btn btn-success">Edit</a>
				|
				<a href="/sepeda/hapus/{{ $s->id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

	{{ $sepeda->links() }}

@endsection
