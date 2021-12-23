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
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                        <thead>
                            <tr>
                                <th>Nisn</th>
                                <th>Nama Lengkap</th>
                                <th>Jk</th>
                                <th>Alamat</th>
                                <th>Kelas</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>Nama Ayah</th>
                                <th>Nama Ibu</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>{{ $siswa->nisn }}</td>
                                <td>{{ $siswa->nama }}</td>
                                <td>{{ $siswa->jk }}</td>
                                <td>{{ $siswa->alamat }}</td>
                                <td>{{ $siswa->kelas }}</td>
                                <td>{{ $siswa->tgl_lahir }}</td>
                                <td>{{ $siswa->tempat_lahir }}</td>
                                <td>{{ $siswa->nama_ayah }}</td>
                                <td>{{ $siswa->nama_ibu }}</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection