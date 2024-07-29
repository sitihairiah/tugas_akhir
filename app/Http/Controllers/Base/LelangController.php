<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use App\Models\JenisUpc;
use App\Models\Lelang;
use Illuminate\Http\Request;

class LelangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_jenis_upc'] = JenisUpc::all();
        return view('base.lelang.index', $data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function detail($jenis_upc)
    {
        $data['jenis_upc'] = JenisUpc::find($jenis_upc);
        $data['list_lelang'] = Lelang::where('id_jenis_upc', $jenis_upc)->get();

        return view('base.lelang.detail', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($lelang)
    {
        $data['list_lelang'] = Lelang::orderBy('id', 'DESC')->get();
        $data['lelang'] = Lelang::find($lelang);

        return view('base.lelang.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
