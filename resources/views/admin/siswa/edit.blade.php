@extends('admin.layouts.admin')
@section('title', 'PAUD AL-YUSRO')

@push('header')
<div class="page-header">
    <h4 class="page-title">Siswa</h4>
    <ul class="breadcrumbs">
        <li class="nav-home">
            <a href="#">
                <i class="flaticon-home"></i>
            </a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">Siswa</a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">{{ $judul }}</a>
        </li>
    </ul>
</div>
@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="card-title text-white">{{ $judul }}</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <form action="{{ route('siswa.update', $siswa->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Nisn</label>
                                <input type="text" name="nisn" class="form-control" value="{{ $siswa->nisn }}">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}">
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select name="jk" class="form-control">
                                    <option value="">Select Choose</option>
                                    <option value="laki-laki" @if ($siswa->jk == "laki-laki" )selected @endif>Laki - Laki</option>
                                    <option value="perempuan" @if ($siswa->jk == "perempuan" )selected @endif>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" value="{{ $siswa->tgl_lahir }}">
                            </div>
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" value="{{ $siswa->tempat_lahir }}">
                            </div>
                            <div class="form-group">
                                <label for="">Kelas</label>
                                <select name="kelas" class="form-control">
                                    <option value="">Select Choose</option>
                                    <option value="Kelas A" @if ($siswa->kelas == "Kelas A" )selected @endif>Kelas A</option>
                                    <option value="Kelas B" @if ($siswa->kelas == "Kelas B" )selected @endif>Kelas B</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat Lengkap</label>
                                <input type="text" name="alamat" class="form-control" value="{{ $siswa->alamat }}">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Ayah</label>
                                <input type="text" name="nama_ayah" class="form-control" value="{{ $siswa->nama_ayah }}">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Ibu</label>
                                <input type="text" name="nama_ibu" class="form-control" value="{{ $siswa->nama_ibu }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection