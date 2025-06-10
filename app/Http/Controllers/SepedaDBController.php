<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SepedaDBController extends Controller
{
    	public function index()
{
    $sepeda = DB::table('sepeda')->paginate(10);
    return view('sepeda.index',['sepeda' => $sepeda]);
}

    public function tambah()
    {

	// memanggil view tambah
	return view('sepeda.tambah');

    }


    // method untuk insert data ke table sepeda
    public function store(Request $request)
    {
	// insert data ke table sepeda
	DB::table('sepeda')->insert([
		'merksepeda' => $request->merk,
        'hargasepeda' => $request->harga,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// alihkan halaman ke halaman sepeda
	return redirect('/sepeda');

    }

    // method untuk edit data pegawai
public function edit($id)
{
	// mengambil data sepeda berdasarkan id yang dipilih
	$sepeda = DB::table('sepeda')->where('id',$id)->get();
	// passing data sepeda yang didapat ke view edit.blade.php
	return view('sepeda.edit',['sepeda' => $sepeda]);

}

// update data sepeda
public function update(Request $request)
{
	// update data sepeda
	DB::table('sepeda')->where('id',$request->id)->update([
		'merksepeda' => $request->merk,
        'hargasepeda' => $request->harga,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// alihkan halaman ke halaman sepeda
	return redirect('/sepeda');
}

// method untuk hapus data sepeda
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('sepeda')->where('id',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/sepeda');
}

//cari data sepeda
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table sepeda sesuai pencarian data
		$sepeda = DB::table('sepeda')
		->where('merksepeda','like',"%".$cari."%")
		->paginate();

    	// mengirim data sepeda ke view index
		return view('sepeda.index',['sepeda' => $sepeda]);

	}

}
