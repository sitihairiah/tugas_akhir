<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Lelang;
use App\Models\Slide;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    
    public function index()
    {
        $data['list_slide'] = Slide::all();
        $data['list_berita'] = Berita::where('status', 1)->orderBy('id', 'DESC')->get();
        $data['list_lelang'] = Lelang::orderBy('id', 'DESC')->get();
        return view('base.index', $data);
    }

    
    public function contact()
    {
        return view('base.contact');
    }

    public function profil()
    {
        return view('base.profil');
    }


    
    public function store(Request $request)
    {
        //
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
