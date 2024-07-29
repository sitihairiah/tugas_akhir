<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    
    public function index()
    {
        $data['list_super_admin'] = SuperAdmin::all();
        return view('super-admin.x.index', $data);
    }

    
    public function create()
    {
        return view('super-admin.x.create');
    }

    
    public function store(Request $request)
    {
        $super_admin = New SuperAdmin();
        $super_admin->nama = request('nama');
        $super_admin->username = request('username');
        $super_admin->password = request('password');
        $super_admin->handleUploadPoto();
        $super_admin->save();

        return redirect('super-admin/x')->with('success', 'Data Berhasil Disimpan');
    }

    
    public function show($super_admin)
    {
        $data['super_admin'] = SuperAdmin::find($super_admin);

        return view('super-admin.x.show', $data);
    }

    
    public function edit($super_admin)
    {
        $data['super_admin'] = SuperAdmin::find($super_admin);

        return view('super-admin.x.edit', $data);
    }

    
    public function update($super_admin)
    {
        $super_admin = SuperAdmin::find($super_admin);
        $super_admin->nama = request('nama');
        $super_admin->username = request('username');
        if(request('password')) $super_admin->password = request('password');
        $super_admin->handleUploadPoto();
        $super_admin->save();

        return redirect('super-admin/x')->with('success', 'Data Berhasil Diedit');
    }

    
    public function destroy($super_admin)
    {
        SuperAdmin::destroy($super_admin);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
