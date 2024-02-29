<?php

namespace App\Http\Controllers\Produk;

use App\Http\Controllers\Controller;
use App\Models\Satuan_produk;
use Illuminate\Http\Request;


class SatuanController extends Controller
{
    //
    public function index()
    {
        $allData = Satuan_produk::all();
        $nama = "SB000";
        if(empty($allData)){            
            $nama = Satuan_produk::orderBy('id', 'DESC')->first()->kode_nama;
        }
        $nama++;
        return view('satuan_barang.index', compact('allData', 'nama'));
    }

    public function tambah(Request $request)
    {
        $allData = new Satuan_produk();
        if(!empty($allData)){            
            $nama = "KP001";
        }
        $allData->kode_nama = $nama;
        $allData->nama = $request->nama;
        $allData->save();
        return back();
    }
    public function update(Request $request, $id)
    {
        $data = Satuan_produk::findOrFail($id);
        $data->kode_nama = Satuan_produk::findOrFail($id)->kode_nama;
        $data->nama = $request->nama;
        $data->update();
        return back();
    }
    public function destroy($id)
    {
        $data = Satuan_produk::findOrFail($id);
        $data->delete();
        return back();
    }
}
