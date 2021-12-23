<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BerandaController extends Controller
{
    public function index() 
    {
        $title = "Beranda";
        $data = Post::latest()->paginate(4);
        return view('beranda.home', compact('title', 'data'));
    }
}
