@extends('admin.layouts.admin')
@section('title', 'PAUD AL-YUSRO')

@push('header')
<div class="page-header">
    <h4 class="page-title">Guru</h4>
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
            <a href="#">Guru</a>
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
                                <th>Nip/Pgid</th>
                                <th>Nama Lengkap</th>
                                <th>Jk</th>
                                <th>Alamat</th>
                                <th>Jabatan</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>Email</th>
                                <th>No Hendphone</th>
                                <th>Photo</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>{{ $guru->nip }}</td>
                                <td>{{ $guru->nama }}</td>
                                <td>{{ $guru->jk }}</td>
                                <td>{{ $guru->alamat }}</td>
                                <td>{{ $guru->jabatan }}</td>
                                <td>{{ $guru->tgl_lahir }}</td>
                                <td>{{ $guru->tempat_lahir }}</td>
                                <td>{{ $guru->email }}</td>
                                <td>{{ $guru->nohp }}</td>
                                <td>
                                    <img src="{{ asset('uploads/guru/'. $guru->image) }}" height="100">
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection