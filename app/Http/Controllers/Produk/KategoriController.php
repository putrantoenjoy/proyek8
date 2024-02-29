<?php

namespace App\Http\Controllers\Produk;

use App\Http\Controllers\Controller;
use App\Models\Kategori_produk;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class KategoriController extends Controller
{
    //
    public function index()
    {
        $allData = Kategori_produk::get();
        // if(!empty($allData)){            
        //     $nama = "KP001";
        // }
        $total_kategori = Kategori_produk::count();
        $kode  = "KP". sprintf("%04d", $total_kategori + 1);
        // $nama = Kategori_produk::orderBy('id', 'DESC')->first()->kode_kategori;
        // $nama++;
        return view('kategori_produk.index', compact('allData', 'kode'));
    }
    public function tambah(Request $request)
    {
        $allData = new Kategori_produk();
        // if(!empty($allData)){            
        //     $nama = "KP001";
        // }
        $total_kategori = Kategori_produk::count();
        $kode  = "KP". sprintf("%04d", $total_kategori + 1);
        $allData->kode_kategori = $kode;
        $allData->nama = $request->nama;
        $allData->status = $request->status;
        $allData->save();
        return back();
    }
    public function update(Request $request, $id)
    {
        $data = Kategori_produk::findOrFail($id);
        dd($request->all());
        $data->update();
        return back();
    }
}
