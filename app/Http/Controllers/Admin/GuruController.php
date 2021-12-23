<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Guru;
use File;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul = "Data Guru";
        $data = Guru::all();
        return view('admin.guru.index', compact('judul', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul = 'Form Tambah Data Guru';
        return view('admin.guru.create', compact('judul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $new_image = time()."_". $image->getClientOriginalName();
        $tujuan_image = 'uploads/guru';
        $image->move($tujuan_image, $new_image);

        $guru = Guru::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'email' => $request->email,
            'nohp' => $request->nohp,
            'jabatan' => $request->jabatan,
            'image' => $new_image
        ]);
        return redirect()->route('guru.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $judul = 'Detail Data Guru';
        $guru = Guru::where('id', $id)->first();
        return view('admin.guru.detail', compact('judul', 'guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $judul = "Form Ubah Data Guru";
        $guru = Guru::where('id', $id)->first();
        return view('admin.guru.edit', compact('judul', 'guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $guru = Guru::where('id', $id)->first();
        if ($request->file('image')) {
            $image = $request->file('image');
            $new_image = time()."_". $image->getClientOriginalName();
            $tujuan_image = 'uploads/guru';
            $image->move($tujuan_image, $new_image);

            $guru->update([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'jk' => $request->jk,
                'tgl_lahir' => $request->tgl_lahir,
                'tempat_lahir' => $request->tempat_lahir,
                'email' => $request->email,
                'nohp' => $request->nohp,
                'jabatan' => $request->jabatan,
                'image' => $new_image
            ]);
        } else {
            $guru->update([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'jk' => $request->jk,
                'tgl_lahir' => $request->tgl_lahir,
                'tempat_lahir' => $request->tempat_lahir,
                'email' => $request->email,
                'nohp' => $request->nohp,
                'jabatan' => $request->jabatan,
            ]);
        }
        return redirect()->route('guru.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::where('id', $id)->first();
        File::delete('uploads/guru/'. $guru->image);
        Guru::where('id', $id)->delete();
        return redirect()->back();
    }
}
