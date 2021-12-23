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
                <div class="row mb-3">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6 mb-2">
                        
                        <div class="btn-group" style="float: right; margin-right: 40px;">
                            <a href="{{ route('guru.create') }}" class="btn btn-sm btn-primary mr-2">Tambah Data</a>
                            <button type="button" class="btn btn-sm btn-danger">Export To</button>
                            <button type="button" class="btn btn-sm btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">PDF</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">EXCEL</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table " >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nip/Pgid</th>
                                <th>Nama Lengkap</th>
                                <th>Jk</th>
                                <th>Alamat</th>
                                <th>jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->nip }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jk }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td>
                                    
                                    <form action="{{ route('guru.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('guru.show', $item->id) }}" class="btn btn-sm btn-success">Detail</a>
                                        <a href="{{ route('guru.edit', $item->id) }}" class="btn btn-sm btn-info">Ubah</a>
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                   
                                </td>
                            </tr>
                            @endforeach
                           @php
                               $i++;
                           @endphp
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection