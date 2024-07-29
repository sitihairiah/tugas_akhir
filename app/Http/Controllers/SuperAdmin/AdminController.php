<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\JenisUpc;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        $data['list_admin'] = Admin::all();
        return view('super-admin.admin.index', $data);
    }

    
    public function create()
    {
        $data['list_jenis_upc'] = JenisUpc::all();
        return view('super-admin.admin.create', $data);
    }

    
    public function store(Request $request)
    {
        $admin = New Admin();
        $admin->id_jenis_upc = request('id_jenis_upc');
        $admin->nama = request('nama');
        $admin->username = request('username');
        $admin->password = request('password');
        $admin->handleUploadPoto();
        $admin->save();

        return redirect('super-admin/admin')->with('success', 'Data Berhasil Disimpan');
    }

    
    public function show($admin)
    {
        $data['admin'] = Admin::find($admin);

        return view('super-admin.admin.show', $data);
    }

    
    public function edit($admin)
    {
        $data['list_jenis_upc'] = JenisUpc::all();
        $data['admin'] = Admin::find($admin);

        return view('super-admin.admin.edit', $data);
    }

    
    public function update($admin)
    {
        $admin = Admin::find($admin);
        $admin->id_jenis_upc = request('id_jenis_upc');
        $admin->nama = request('nama');
        $admin->username = request('username');
        if(request('password')) $admin->password = request('password');
        $admin->handleUploadPoto();
        $admin->save();

        return redirect('super-admin/admin')->with('success', 'Data Berhasil Diedit');
    }

    
    public function destroy($admin)
    {
        Admin::destroy($admin);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
