<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class keranjangbelanjaDBController extends Controller
{
    	public function index()
{
    $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10);
    return view('keranjangbelanja.index',['keranjangbelanja' => $keranjangbelanja]);
}

    public function tambah()
    {

	// memanggil view tambah
	return view('keranjangbelanja.tambah');

    }


    // method untuk insert data ke table keranjangbelanja
    public function store(Request $request)
    {
	// insert data ke table keranjangbelanja
	DB::table('keranjangbelanja')->insert([
		'KodeBarang' => $request->barang,
        'Jumlah' => $request->jumlah,
		'Harga' => $request->harga,
        'Total' => $request->jumlah * $request->harga
	]);
	// alihkan halaman ke halaman keranjangbelanja
	return redirect('/keranjangbelanja');

    }

public function hapus($id)
    {
        DB::table('keranjangbelanja')->where('id', $id)->delete();
        return redirect('/keranjangbelanja');
    }
}
