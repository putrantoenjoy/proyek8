<?php

namespace App\Http\Controllers\Produk;

use App\Http\Controllers\Controller;
use App\Models\Kategori_produk;
use Illuminate\Http\Request;
use Auth;

class KategoriController extends Controller
{
    //
    public function index()
    {
        $allData = Kategori_produk::get();
        if(!empty($allData)){            
            $nama = "KP001";
        }
        return view('kategori_produk.index', compact('allData', 'nama'));
    }
    public function tambah(Request $request)
    {
        $allData = new Kategori_produk();
        if(!empty($allData)){            
            $nama = "KP001";
        }
        $user = User::orderBy('id', 'DESC')->first();
        $nama = User::
        $allData->kode_kategori = $nama;
        $allData->nama = $request->nama;
        $allData->status = $request->status;
        dd($allData);
        return back();
    }
    public function update(Request $request, $id)
    {
        return view('');
    }
}
