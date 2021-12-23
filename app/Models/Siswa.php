<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nisn', 'nama', 'jk', 'alamat', 'tgl_lahir', 'tempat_lahir', 'kelas', 'nama_ayah', 'nama_ibu'
    ];
}
