<?php

namespace App\Http\Controllers\Produk;

use App\Http\Controllers\Controller;
use App\Models\Kategori_produk;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    public function index(Request $request)
    {
        $cari = $request->cari;
        $data = Kategori_produk::where('deleted_at', null);
        if(!empty ($request->cari)){
            $data->where('nama', 'like', "%". $cari ."%");
        }
        $allData = $data->paginate(1);

        // $allData = Kategori_produk::get();
        $total_kategori = Kategori_produk::count();
        $kode  = "KP". sprintf("%04d", $total_kategori + 1);
        return view('kategori_produk.index', compact('allData', 'kode', 'cari'));
    }
    public function tambah(Request $request)
    {
        $allData = new Kategori_produk();
        $total_kategori = Kategori_produk::count();
        $kode  = "KP". sprintf("%04d", $total_kategori + 1);
        $allData->kode_kategori = $kode;
        $allData->nama = $request->nama;
        $allData->save();
        return back()->with('status', 'satuan berhasil ditambah');
    }
    public function update(Request $request, $id)
    {
        $data = Kategori_produk::findOrFail($id);
        $data->kode_kategori = Kategori_produk::findOrFail($id)->kode_kategori;
        $data->nama = $request->nama;
        $data->update();
        return back()->with('status', 'satuan berhasil diupdate');
    }
    public function destroy($id)
    {
        $data = Kategori_produk::findOrFail($id);
        $data->delete();
        return back()->with('delete', 'satuan berhasil dihapus');
    }
}
