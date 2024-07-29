<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lelang;
use Illuminate\Http\Request;

class LelangController extends Controller
{
    
    public function index()
    {
        $data['list_lelang'] = Lelang::all();

        return view('admin.lelang.index', $data);
    }

    
    public function create()
    {
        return view('admin.lelang.create');
    }

    
    public function store()
    {
        $lelang = New Lelang();
        $lelang->id_jenis_upc = request('id_jenis_upc');
        $lelang->nama = request('nama');
        $lelang->tanggal_lelang = request('tanggal_lelang');
        $lelang->deskripsi = request('deskripsi');
        $lelang->handleUploadPoto();
        $lelang->save();

        return redirect('admin/lelang')->with('success','Data Berhasil Disimpan');
    }

    
    public function show($lelang)
    {
        $data['lelang'] = Lelang::find($lelang);

        return view('admin.lelang.show', $data);
    }

    
    public function edit($lelang)
    {
        $data['lelang'] = Lelang::find($lelang);

        return view('admin.lelang.edit', $data);
    }

    
    public function update($lelang)
    {
        $lelang = Lelang::find($lelang);
        $lelang->nama = request('nama');
        $lelang->tanggal_lelang = request('tanggal_lelang');
        $lelang->deskripsi = request('deskripsi');
        $lelang->handleUploadPoto();
        $lelang->save();

        return redirect('admin/lelang')->with('warning','Data Berhasil Disimpan');
    }

    
    public function destroy($lelang)
    {
        Lelang::destroy($lelang);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
