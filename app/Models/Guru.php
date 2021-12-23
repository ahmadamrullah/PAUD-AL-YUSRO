<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = [
        'nip', 'nama', 'alamat', 'jk', 'tgl_lahir', 'tempat_lahir', 'email', 'nohp', 'image', 'jabatan'
    ];
}
