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
<section class="section-visi_misi">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 visi_misi">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('assets') }}/img/visi.PNG" class="img-fluid rounded float-left">
                    </div>
                    <div class="col-lg-8">
                        <h2 class="text-center mt-2">Visi</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quae consectetur quia,
                            esse pariatur, eaque excepturi vitae veritatis tempore voluptatum deserunt aliquam
                            aspernatur sapiente accusamus ex doloremque blanditiis quidem maiores!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus doloribus laboriosam
                            dolorum, rem sed alias, nesciunt nobis saepe velit debitis obcaecati consequatur soluta
                            assumenda delectus culpa accusantium nisi fugiat illo!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-10 visi_misi">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="text-center mt-2">Misi</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quae consectetur quia,
                            esse pariatur, eaque excepturi vitae veritatis tempore voluptatum deserunt aliquam
                            aspernatur sapiente accusamus ex doloremque blanditiis quidem maiores!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus doloribus laboriosam
                            dolorum, rem sed alias, nesciunt nobis saepe velit debitis obcaecati consequatur soluta
                            assumenda delectus culpa accusantium nisi fugiat illo!
                        </p>
                    </div>

                    <div class="col-lg-4">
                        <img src="{{ asset('assets') }}/img/misi.PNG" class="img-fluid rounded float-left">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection