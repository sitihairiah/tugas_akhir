<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
    public function index()
    {
        return view('register');
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $customer = Customer::find(request('nik'));
		if($customer) return back()->with('success', 'NIK Sudah Terdaftar');

        $customer = New Customer();
        $customer->nik = request('nik');
        $customer->nama = request('nama');
        $customer->username = request('username');
        $customer->confirmasi_password = request('confirmasi_password');
        $customer->alamat = request('alamat');
        $customer->nomor_hp = request('nomor_hp');
        $customer->level = 1;
        $customer->status = 1;
        $customer->handleUploadPoto();

        $customer->save();

        return redirect('login')->with('success', 'Data Berhasil Terkirim');
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
