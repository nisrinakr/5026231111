@extends('template')

@section('content')
    <h3>Keranjang Belanja</h3>

    <a href="/keranjangbelanja" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/keranjangbelanja/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="barang">
                Kode Barang
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="barang" placeholder="Masukkan Kode Barang" name="barang"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="jumlah">
                Jumlah Pembelian
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="jumlah" placeholder="Masukkan Jumlah" name="jumlah"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="harga">
                Harga per Item
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="harga" placeholder="Masukkan Harga" name="harga"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="total">
                Total
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="total" name="total" readonly>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>

    <script>
        // hitung total otomatis
        const jumlah = document.getElementById('jumlah');
        const harga = document.getElementById('harga');
        const total = document.getElementById('total');

        function hitungTotal() {
            const j = parseInt(jumlah.value) || 0;
            const h = parseInt(harga.value) || 0;
            total.value = j * h;
        }

        jumlah.addEventListener('input', hitungTotal);
        harga.addEventListener('input', hitungTotal);
    </script>

    @endsection
