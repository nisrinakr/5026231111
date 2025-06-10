@extends('template')

@section('content')
    <h3>Data Sepeda</h3>

    <a href="/sepeda" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/sepeda/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="merk">
                Merk Sepeda
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="merk" placeholder="Masukkan Merk Sepeda" name="merk"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="harga">
                Harga
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="harga" placeholder="Masukkan Harga" name="harga"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2">Tersedia</label>
            <div class="col-sm-6">
                <div class="radio">
                    <label>
                        <input type="radio" name="tersedia" value="1" required> Ya
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="tersedia" value="0"> Tidak
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="berat">
                Berat (dalam kg)
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="berat" name="berat"
                    step="0.01" value="0.00" required>
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success" >
    </form>

    @endsection
