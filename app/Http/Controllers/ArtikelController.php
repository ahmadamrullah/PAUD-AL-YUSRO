<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ArtikelController extends Controller
{
    public function artikel()
    {
        $title = "Artikel";
        $post = Post::latest()->paginate(6);
        $artikel_terkait = Post::latest()->get()->random(4);
        return view('artikel.index', compact('title', 'post', 'artikel_terkait'));
    }

    public function detail_artikel($slug)
    {
        $title = "Detail Artikel";
        $detail_artikel = Post::where('slug', $slug)->first();
        $artikel_terbaru = Post::latest()->get()->take(3);
        $artikel_terkait = Post::latest()->get()->random(4);
        return view('artikel.single_artikel', compact('title','detail_artikel','artikel_terbaru','artikel_terkait'));
    }
}
