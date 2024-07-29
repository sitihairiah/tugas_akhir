<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\JenisUpc;
use Illuminate\Http\Request;

class JenisUpcPegadaianController extends Controller
{
    
    public function index()
    {
        $data['list_jenis_upc_pegadaian'] = JenisUpc::all();

        return view('super-admin.jenis-upc-pegadaian.index', $data);
    }

    
    public function create()
    {
        return view('super-admin.jenis-upc-pegadaian.create');
    }

    
    public function store(Request $request)
    {
        $jenis_upc_pegadaian = New JenisUpc();
        $jenis_upc_pegadaian->nama_upc = request('nama_upc');
        $jenis_upc_pegadaian->alamat = request('alamat');
        $jenis_upc_pegadaian->no_telp = request('no_telp');
        $jenis_upc_pegadaian->save();

        return redirect('super-admin/jenis-upc-pegadaian')->with('success', 'Data Berhasil Disimpan');
    }

    
    public function edit($jenis_upc_pegadaian)
    {
        $data['jenis_upc_pegadaian'] = JenisUpc::find($jenis_upc_pegadaian);

        return view('super-admin.jenis-upc-pegadaian.edit', $data);
    }

    
    public function update($jenis_upc_pegadaian)
    {
        $jenis_upc_pegadaian = JenisUpc::find($jenis_upc_pegadaian);
        $jenis_upc_pegadaian->nama_upc = request('nama_upc');
        $jenis_upc_pegadaian->alamat = request('alamat');
        $jenis_upc_pegadaian->no_telp = request('no_telp');
        $jenis_upc_pegadaian->save();

        return redirect('super-admin/jenis-upc-pegadaian')->with('success', 'Data Berhasil Diedit');
    }

    
    public function destroy($jenis_upc_pegadaian)
    {
        JenisUpc::destroy($jenis_upc_pegadaian);

        return back()->with('danger','Data Berhasil Dihapus');
    }
}
