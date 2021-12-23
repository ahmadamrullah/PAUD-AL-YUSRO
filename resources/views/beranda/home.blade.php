@extends('layouts.master')

<!-- navbar -->
@include('layouts.include.navbar')
<!-- end navbar -->

<!-- text berjalan -->
@include('layouts.include.text-berjalan')
<!-- end text berjalan -->


<!-- slider -->
@include('layouts.include.slider')
<!-- end slider -->

@section('content')
    <!-- start section 1 -->
    <div class="section-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 sambutan">
                    <div class="row">
                        <div class="col-lg justify-content-center d-flex">
                            <img src="{{ asset('assets') }}/img/kepala seklah.jpg" width="200" height="220">
                        </div>
                        <div class="col-lg">
                            <h2>Sambutan Kepala Sekolah</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quae consectetur quia,
                                esse pariatur, eaque excepturi vitae veritatis tempore voluptatum deserunt aliquam
                                aspernatur sapiente accusamus ex doloremque blanditiis quidem maiores!
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus doloribus laboriosam
                                dolorum, rem sed alias, nesciunt nobis saepe velit debitis obcaecati consequatur soluta
                                assumenda delectus culpa accusantium nisi fugiat illo!
                            </p>
                            <a href="" class="btn btn-outline-danger mb-3">Selengkapnya..</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section 1 -->

    <!-- start section 2 -->
    <section class="section-2">
        <div class="container">
            <div class="col-lg-12">
                <h3>MOTTO PAUD AL-YUSRO</h3>

                <!-- akhir row 1 -->
                <div class="row motto">
                    <div class="col-lg-4 col-sm-6 col-md-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><img src="{{ asset('assets') }}/img/icon/buffer-brands.svg"
                                        class="img-fluid rounded mx-auto d-block"></h5>
                                <h6 class="card-subtitle">Islami</h6>
                                <p class="card-text">
                                    Membentuk generasi Islami dalam diri anak dengan pembiasaan berperilaku yang
                                    berlandaskan Al-Qur’an dan Sunnah
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-md-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><img src="{{ asset('assets') }}/img/icon/book-reader-solid.svg"
                                        class="img-fluid rounded mx-auto d-block"></h5>
                                <h6 class="card-subtitle">Cerdas</h6>
                                <p class="card-text">
                                    Mencetak generasi yang cerdas dengan penguatan pendidikan berkarakter dan
                                    kepribadian anak
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-md-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><img src="{{ asset('assets') }}/img/icon/child-solid.svg"
                                        class="img-fluid rounded mx-auto d-block"></h5>
                                <h6 class="card-subtitle">Mandiri</h6>
                                <p class="card-text">
                                    Menumbuhkan sikap mandiri pada anak dengan berbagai kegiatan yang mendukung pola
                                    berfikir anak
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- akhir row 2 -->
            </div>
        </div>
    </section>
    <!-- end section 2 -->

    <!-- start section 3 -->
    <section class="section-3">
        <div class="container">
            <div class="row ruangan">
                <div class="col-lg-3 col-sm-6 col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><img src="{{ asset('assets') }}/img/icon/user-solid.svg"
                                    class="img-fluid rounded mx-auto d-block"></h5>
                            <h6 class="card-subtitle">Siswa</h6>
                            <p class="card-text">
                                {{ total_siswa() }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><img src="{{ asset('assets') }}/img/icon/user-graduate-solid.svg"
                                    class="img-fluid rounded mx-auto d-block"></h5>
                            <h6 class="card-subtitle">Tenaga Pendidik</h6>
                            <p class="card-text">
                                {{ total_guru() }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><img src="{{ asset('assets') }}/img/icon/cloud-upload-alt-solid.svg"
                                    class="img-fluid rounded mx-auto d-block"></h5>
                            <h6 class="card-subtitle">Upload Postingan</h6>
                            <p class="card-text">
                                {{ total_uploads() }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><img src="{{ asset('assets') }}/img/icon/person-booth-solid.svg"
                                    class="img-fluid rounded mx-auto d-block"></h5>
                            <h6 class="card-subtitle">Ruang Kelas</h6>
                            <p class="card-text">
                                2
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- end section-3 -->

    <!-- start section 4 -->
    <section class="section-4">
        <div class="container">
            <div class="row">
                <div class="col-lg blog">
                    <h2>Artikel Terbaru</h2>
                    <div class="row">
                        @foreach ($data as $item)
                        <div class="col-lg-3 col-sm-6">
                            <figure class="figure">
                                <img src="{{ asset('uploads/artikel/'. $item->gambar) }}" class="figure-img img-fluid rounded" alt="...">
                                <figcaption class="figure-caption">
                                    <h5><a href="{{ route('artikel.detail', $item->slug) }}">{{ $item->judul }}</a></h5>
                                    <p>{{ Str::limit($item->konten, 150) }}</p>
                                </figcaption>
                            </figure>
                        </div>
                        @endforeach
                        

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section-4 -->

    <!-- start section-5 -->
    <section class="section-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <h3>Testimoni wali murid Paud <br> Al-yusro</h3>
                <div class="carousel-item active">
                    <div class="kata_mereka pt-5 pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-2">
                                    <img src="{{ asset('assets') }}/img/guru.jpg" class="rounded-circle rounded mx-auto d-block">
                                    <h5>Wali Murid</h5>
                                </div>
                                <div class="col-md-6">
                                    <h4>Nur'aeni</h4>
                                    <p>
                                        Alhamdulillah selama sekolah di PAUD Al-Yusro Moyot, anak-anak
                                        mengalami banyak kemajuan akademik, hafalan dan mengaji, sosialisasi dengan
                                        teman, terlebih akhlak.
                                    </p>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="kata_mereka pt-5 pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-2">
                                    <img src="{{ asset('assets') }}/img/kepala seklah.jpg" class="rounded-circle rounded mx-auto d-block">
                                    <h5>Wali Murid</h5>
                                </div>
                                <div class="col-md-6">
                                    <h4>Mukman</h4>
                                    <p>
                                        Sebagai orang tua siswa, sangat bersyukur anak saya bisa bersekolah di PAUD
                                        Al-Yusro
                                        Moyot, karena guru-gurunya sangat sabar dalam mengajar, mendidik
                                        dan membimbing. Anak-anak menjadi lebih percaya diri, rajin beribadah dan
                                        menjadikan anak lebih mudah bersosialisasi dengan teman-temannya. Semoga semakin
                                        berkembang dan maju. Aamiin
                                    </p>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="kata_mereka pt-5 pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-2">
                                    <img src="{{ asset('assets') }}/img/guru1.jpg" class="rounded-circle rounded mx-auto d-block">
                                    <h5>Warga</h5>
                                </div>
                                <div class="col-md-6">
                                    <h4>Hj. Sariah</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nulla
                                        necessitatibus facere quasi? Velit alias doloremque voluptatum repellat, laborum
                                        est nulla quos quam repudiandae soluta iste placeat deserunt repellendus modi.
                                    </p>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- end section-5  -->
@endsection