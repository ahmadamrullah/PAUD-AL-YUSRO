<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Post;

class SejarahController extends Controller
{
    public function index() 
    {
        $title = "Sejarah PKBM";
        $artikel_terkait = Post::latest()->get()->random(4);
        return view('sejarah.sejarah_pkbm', compact('title', 'artikel_terkait'));
    }

    public function sambutan() 
    {
        $title = "Sambutan Kepala Sekolah";
        return view('sejarah.sambutan', compact('title'));
    }

    public function visi() 
    {
        $title = "Visi & Misi";
        return view('sejarah.visi', compact('title'));
    }

    public function struktur_organisasi() 
    {
        $title = "Struktur Organisasi";
        return view('sejarah.struktur', compact('title'));
    }

    public function data_siswa() 
    {
        $title = "Data Siswa";
        $siswas = Siswa::latest()->paginate(10);
        return view('siswa.index', compact('title','siswas'));
    }

    public function data_guru() 
    {
        $title = "Data Guru";
        $gurus = Guru::paginate(10);
        return view('guru.index', compact('title','gurus'));
    }
}
