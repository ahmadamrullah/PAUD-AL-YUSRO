<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul = "Data Gallery";
        $data = Gallery::latest()->paginate(12);
        return view('admin.gallery.index', compact('judul', 'data'));
    }

    public function create(Request $request)
    {
        $gambar = $request->file('gambar');
        $gambar_baru = time()."_". $gambar->getClientOriginalName();
        $tujuan_gambar = 'uploads/gallery';
        $gambar->move($tujuan_gambar, $gambar_baru);

        $gallery = Gallery::create([
            'gambar' => $gambar_baru
        ]);

        return redirect()->route('gallery.index');
    }

   
    public function destroy($id)
    {
        $gallery = Gallery::where('id', $id)->first();
        File::delete('uploads/gallery'. $gallery->gambar);
        Gallery::where('id', $id)->delete();
        return redirect()->back();
    }
}
