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
<section class="section-struktur_organ">
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <h2 class="text-center">Struktur Organisasi</h2>
                <div class="struktur">
                    <img src="{{ asset('assets') }}/img/struktur.jpg" class="img-fluid rounded mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection