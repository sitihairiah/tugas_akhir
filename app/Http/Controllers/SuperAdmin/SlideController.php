<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        $data['list_slide'] = Slide::all();

        return view('super-admin.slide.index', $data);
    }

    
    public function create()
    {
        return view('super-admin.slide.create');
    }

    
    public function store()
    {
        $slide = New Slide();
        $slide->title = request('title');
        $slide->handleUploadPoto();
        $slide->save();

        return redirect('super-admin/slide')->with('success', 'Data Berhasil Disimpan');
    }

    
    public function show($slide)
    {
        $data['slide'] = Slide::find($slide);

        return view('super-admin.slide.show', $data);
    }

    
    public function edit($slide)
    {
        $data['slide'] = Slide::find($slide);

        return view('super-admin.slide.edit', $data);
    }

    
    public function update($slide)
    {
        $slide = Slide::find($slide);
        $slide->title = request('title');
        $slide->handleUploadPoto();
        $slide->save();

        return redirect('super-admin/slide')->with('warning', 'Data Berhasil Disimpan');
    }

    
    public function destroy($slide)
    {
        Slide::destroy($slide);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }

   
    
}
