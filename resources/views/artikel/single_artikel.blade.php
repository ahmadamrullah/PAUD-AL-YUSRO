@extends('layouts.master')

<!-- navbar -->
@include('layouts.include.navbar')
<!-- end navbar -->


<!-- slider -->
@push('jumbotron')
     <!-- section navigasi -->
     <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">{{ $title }}</h1>
        </div>
    </div>
    </section>
    <!-- akhir section-navigasi -->
@endpush
<!-- end slider -->

@section('content')
<!-- start artikel -->
<section class="section-detail-artikel">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <hr>
                <div class="single-image">
                    <img src="{{ asset('uploads/artikel/'. $detail_artikel->gambar) }}" class="img-fluid">
                </div>

                <div class="single-text">
                    <p>
                        {{ $detail_artikel->konten }}
                    </p>
                </div>

                <div class="artikel-terbaru" style="margin-top: 10%;">
                    <h3>Artikel Terbaru</h3>
                    <hr>
                </div>

                <div class="row">

                   @foreach ($artikel_terbaru as $item)
                   <div class="col-md-4 blog">
                    <figure class="figure">
                        <img src="{{ asset('uploads/artikel/'. $item->gambar) }}" class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption">
                            <h5><a href="{{ route('artikel.detail', $item->slug) }}">{{ $item->judul }}</a></h5>
                            <p>{{ str_limit($item->konten, 60) }}</p>
                            <a href="{{ route('artikel.detail', $item->slug) }}" class="btn btn-sm btn-danger">Selengkapnya</a>
                        </figcaption>
                    </figure>
                </div>
                   @endforeach
                </div>
            </div>
            <!-- akhir col-lg-9 -->

            <div class="col-lg-4 mt-5">
                <div class="sisi-kanan">
                    <form>
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <div class="card mt-5 mb-5">
                        <img src="{{ asset('assets') }}/img/guru.jpg" class="img-fluid rounded-circle mx-auto d-block">
                        <div class="card-body">
                            <h5 class="card-title text-center">Jupriadi S.Pd</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla minus tenetur culpa
                                nesciunt corporis. Iure cumque, eos earum perspiciatis aperiam ducimus perferendis?
                                Rerum unde earum tempora ipsa qui, quas deleniti.
                            </p>
                        </div>
                    </div>

                    <div class="card mb-5 pb-5 artikel-terkait">
                        <h3>Artikel Terkait</h3>
                        <ul class="list-unstyled">
                            @foreach ($artikel_terkait as $item)
                            <li class="media">
                                <img src="{{ asset('uploads/artikel/'. $item->gambar) }}" class="mr-3" class="img-fluid">
                                <div class="media-body">
                                    <h6 class="mt-4 mb-1"><a href="{{ route('artikel.detail', $item->slug) }}">{{ $item->judul }}</a></h6>
                                    <small>di posting: Admin | {{ $item->created_at->diFFforHumans() }}</small>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- akhir col-lg-3 -->
        </div>
    </div>
</section>

<!-- end artikel -->
@endsection