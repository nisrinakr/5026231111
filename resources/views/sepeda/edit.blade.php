@extends('template')

@section('content')
    <h3>Edit Sepeda</h3>

    <a href="/sepeda" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($sepeda as $s)
        <form action="/sepeda/update" method="post" class="form-horizontal">
            {{ csrf_field() }}

            <input type="hidden" name="id" value="{{ $s->id }}"> <br />

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="merk">
                    Merk Sepeda
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="merk" placeholder="Masukkan Merk Sepeda"
                        name="merk" value="{{ $s->merksepeda }}" required="required">
                </div>
            </div>

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="merk">
                    Harga
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="number" id="harga" placeholder="Masukkan Harga Sepeda"
                        name="harga" value="{{ $s->hargasepeda }}" required="required">
                </div>
            </div>

            <div class="form-group has-success">
                <label class="control-label col-sm-2">Tersedia</label>
                <div class="col-sm-6">
                    <div class="radio">
                        <label>
                            <input type="radio" name="tersedia" value="1" {{ $s->tersedia == 1 ? 'checked' : '' }}>
                            Ya
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="tersedia" value="0" {{ $s->tersedia == 0 ? 'checked' : '' }}>
                            Tidak
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="merk">
                    Berat (dalam gram)
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="number" id="berat" placeholder="Masukkan Berat Sepeda"
                        name="berat" value="{{ $s->berat }}" step="0.01" value="0.00" required="required">
                </div>
            </div>

            <input type="submit" value="Simpan Data" class="btn btn-success"6>
        </form>
    @endforeach
@endsection
