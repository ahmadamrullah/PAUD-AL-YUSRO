<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Siswa;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $judul = "Dashboard"; 
        $siswa = Siswa::all();
        return view('admin.dashboard.index', compact('judul', 'siswa'));
    }

}
