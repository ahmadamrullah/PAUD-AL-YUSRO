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
                <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" value="{{ $post->judul }}">
                    </div>

                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label>Konten</label>
                       <textarea name="konten" id="" rows="10" class="form-control">{{ $post->konten }}</textarea>
                    </div>

                    <div class="form-group">
                        
                        <button type="submit" class="btn btn-success">Update Data</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
<!-- /. ROW  -->

@endsection