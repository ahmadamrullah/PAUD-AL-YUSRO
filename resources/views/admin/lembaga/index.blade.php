@extends('admin.layouts.admin')
@section('title', 'PAUD AL-YUSRO')

@push('header')
<div class="page-header">
    <h4 class="page-title">Lembaga</h4>
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
            <a href="#">Lembaga</a>
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
                <a href="{{ route('lembaga.create') }}" class="btn btn-sm btn-primary mb-2">Tambah Data</a> 
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
                        
                        {{-- <tbody>
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
                            
                        </tbody> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection