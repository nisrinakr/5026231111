@extends('template')

@section('content')
    <h3>Konfirmasi Hapus Data</h3>

    <div class="alert alert-danger">
        <p>Apakah Anda yakin ingin menghapus data berikut?</p>
        <ul>
            <li><strong>Kode Barang:</strong> {{ $keranjang->KodeBarang }}</li>
            <li><strong>Jumlah:</strong> {{ $keranjang->Jumlah }}</li>
            <li><strong>Harga:</strong> Rp {{ number_format($keranjang->Harga, 0, ',', '.') }}</li>
        </ul>
    </div>

    <form action="/keranjangbelanja/hapus/{{ $keranjang->ID }}" method="POST">
        @csrf
        @method('DELETE')

        <a href="/keranjangbelanja" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
@endsection
