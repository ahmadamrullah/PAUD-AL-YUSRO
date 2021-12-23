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
                
            </div>
        </div>
    </div>

</div>
@endsection