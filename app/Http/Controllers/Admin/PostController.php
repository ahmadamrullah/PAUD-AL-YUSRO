<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Str;
use File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul = "Data Artikel";
        $data = Post::all();
        return view('admin.post.index', compact('judul', 'data'));
    }

    public function create()
    {
        $judul = "Form Input Data Artikel";
        return view('admin.post.create', compact('judul'));
    }

    public function store(Request $request)
    {
        $gambar = $request->file('gambar');
        $nama_gambar = time()."_". $gambar->getClientOriginalName();
        $tujuan_gambar = 'uploads/artikel';
        $gambar->move($tujuan_gambar, $nama_gambar);

        $slug = Str::slug($request->judul);
        $post = Post::create([
            'judul' => $request->judul,
            'slug' => $slug,
            'konten' => $request->konten,
            'gambar' => $nama_gambar
        ]);
        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $judul = "Update Data Post ";
        $post = Post::where('id', $id)->first();
        return view('admin.post.edit', compact('judul', 'post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::where('id', $id)->first();
        if ($request->file('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time()."_". $gambar->getClientOriginalName();
            $tujuan_gambar = 'uploads/artikel';
            $gambar->move($tujuan_gambar, $nama_gambar);

            $slug = Str::slug($request->judul);
            $post->update([
                'judul' => $request->judul,
                'slug' => $slug,
                'konten' => $request->konten,
                'gambar' => $nama_gambar
            ]);
        } else {
            $slug = Str::slug($request->judul);
            $post->update([
                'judul' => $request->judul,
                'slug' => $slug,
                'konten' => $request->konten,
            ]);
        }
        return redirect()->route('post.index');
    }

    public function destroy($id)
    {
        $post = Post::where('id', $id)->first();
        File::delete('uploads/artikel'. $post->gambar);
        Post::where('id', $id)->delete();
        return redirect()->back();
    }
}
