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
<div class="container mt-5">
    <h3 style="text-align: center; font-family: 'Times New Roman'; font-weight: bold; margin-bottom: 30px;">
        Data Guru & Karyawan Paud Al-Yusro</h3>
    <div class="row guru">
        @forelse ($gurus as $guru)
        <div class="col-lg-3">
            <figure class="figure">
                <img src="{{ asset('uploads/guru/'. $guru->image) }}" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">
                    <h5> {{ $guru->jabatan }} </h5>
                    <p>{{ $guru->nama }}</p>
                </figcaption>
            </figure>
        </div>

        @empty
            
        @endforelse
        
    </div>
</div>

@endsection