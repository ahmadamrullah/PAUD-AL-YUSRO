<?php
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Post;

function total_siswa()
{
    return Siswa::count();
}

function total_guru()
{
    return Siswa::count();
}

function total_uploads()
{
    return Post::count();
}
