<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    
    public function index()
    {
        $data['list_berita'] = Berita::all();

        return view('super-admin.berita.index', $data);
    }

    
    public function create()
    {
        return view('super-admin.berita.create');
    }

    
    public function store()
    {
        $berita = New Berita();
        $berita->judul = request('judul');
        $berita->deskripsi = request('deskripsi');
        $berita->status = 1;
        $berita->handleUploadPoto();
        $berita->save();

        return redirect('super-admin/berita')->with('success', 'Data Berhasil Disimpan');
    }

    
    public function show($berita)
    {
        $data['berita'] = Berita::find($berita);

        return view('super-admin.berita.show', $data);
    }

    
    public function edit($berita)
    {
        $data['berita'] = Berita::find($berita);

        return view('super-admin.berita.edit', $data);
    }

    
    public function update($berita)
    {
        $berita = Berita::find($berita);
        $berita->judul = request('judul');
        $berita->deskripsi = request('deskripsi');
        $berita->handleUploadPoto();
        $berita->save();

        return redirect('super-admin/berita')->with('warning', 'Data Berhasil Disimpan');
    }

    
    public function destroy($berita)
    {
        Berita::destroy($berita);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }

    public function publis($berita) {
        $berita = Berita::find($berita);
        $berita->status = 1;
        $berita->save();

        return back()->with('success', 'Berita Berhasil Di Publis');
    }

    public function arsip($berita) {
        $berita = Berita::find($berita);
        $berita->status = 2;
        $berita->save();

        return back()->with('success', 'Berita Berhasil Di Arsipkan');
    }
}
