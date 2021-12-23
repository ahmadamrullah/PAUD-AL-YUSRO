@extends('admin.layouts.admin')
@section('title', 'PAUD AL-YUSRO')

@push('header')
<div class="page-header">
    <h4 class="page-title">Gallery</h4>
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
            <a href="#">Gallery</a>
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
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data
                  </button>
                <div class="row">
                    @foreach ($data as $item)
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="{{ asset('uploads/gallery/'. $item->gambar) }}" class="card-img-top" style="object-fit: cover; height: 300px;" alt="gambar 1">
                            
                            <div class="card-body">
                              <form action="{{ route('gallery.destroy', $item->id) }}" method="post">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                              </form>
                            </div>
                        </div>   
                    </div>
                    @endforeach
                </div>
                {{ $data->links() }}
            </div>
        </div>
    </div>

</div>

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('gallery.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Upload Gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Uploads</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection