<?php

namespace App\Http\Controllers\Produk;

use App\Http\Controllers\Controller;
use App\Models\Satuan_produk;
use Illuminate\Http\Request;


class SatuanController extends Controller
{
    //
    public function index(Request $request)
    {
        $cari = $request->cari;
        $data = Satuan_produk::where('deleted_at', null);
        if(!empty ($request->cari)){
            $data->where('nama', 'like', "%". $cari ."%");
        }
        $allData = Satuan_produk::count();
        $kode  = "SP". sprintf("%04d", $allData + 1);
        $allData = $data->paginate(2);

        return view('satuan_barang.index', compact('allData', 'cari', 'kode'));
    }

    public function tambah(Request $request)
    {
        $allData = new Satuan_produk();
        $kode  = "SP". sprintf("%04d", Satuan_produk::count() + 1);
        $allData->kode_nama = $kode;
        $allData->nama = $request->nama;
        $allData->save();
        return back()->with('status', 'satuan berhasil ditambah');
    }
    public function update(Request $request, $id)
    {
        $data = Satuan_produk::findOrFail($id);
        $data->kode_nama = Satuan_produk::findOrFail($id)->kode_nama;
        $data->nama = $request->nama;
        $data->update();
        return back()->with('status', 'satuan berhasil diupdate');
    }
    public function destroy($id)
    {
        $data = Satuan_produk::findOrFail($id);
        $data->delete();
        return back()->with('delete', 'satuan berhasil dihapus');
    }
}
