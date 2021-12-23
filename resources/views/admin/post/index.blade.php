@extends('admin.layouts.admin')

@section('title', 'PAUD AL-YUSRO')
    

@push('header')
<div class="page-header">
    <h4 class="page-title">Artikel</h4>
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
            <a href="#">Artikel</a>
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
        <!-- Advanced Tables -->
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="card-title text-white">{{ $judul }}</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                   <a href="{{ route('post.create') }}" class="btn btn-sm btn-primary mb-3">Tambah data</a>
                   
                    <table class="table" id="basic-datatables">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul </th>
                                <th>Konten</th>
                                <th>Gambar</th>
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
                                <td>{{ $item->judul }}</td>
                                <td>{{ Str::limit($item->konten, 40, '...') }}</td>
                                <td><img src="{{ asset('uploads/artikel/'. $item->gambar) }}" style="object-fit: cover; height: 50px; width: 50px;"></td>
                                <td>
                                    
                                    <form action="{{ route('post.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('post.edit', $item->id) }}" class="btn btn-sm btn-info">Update</a>
                                        <button type="submit" class="btm btn-sm btn-danger">Delete</button>
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
        <!--End Advanced Tables -->
    </div>
</div>
<!-- /. ROW  -->
  
  <!-- Modal -->
  {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Input Artikel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('post.create') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" name="gambar" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="konten" id="" rows="5" class="form-control" required></textarea>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div> --}}

@endsection