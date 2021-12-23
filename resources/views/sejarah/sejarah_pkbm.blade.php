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
                    <h3>Sejarah PKBM PAUD AL-YUSRO</h3>
                    <hr>
                    <div class="single-image">
                        <img src="{{ asset('assets') }}/img/slider/bg.jpg" class="img-fluid">
                    </div>

                    <h4>Profile PAUD AL-YUSRO</h4>
                    <hr>

                    <div class="single-text">
                        <p>
                            Pendidikan anak usia dini adalah suatu pembinaan yang ditujukan kepada anak yang dilakukan
                            melalui pemberian rangsangan pendidikan untuk membantu pertumbuhan dan perkembangan jasmani
                            dan rohani agar anak memiliki kesiaan dalam memasuki pendidikan lebih lanjut.
                            Masa optimal untuk merangsang kemampuan dasar belajar pada anak-anak sebagian besar terjadi
                            sebelum usia lima tahun dan belum memasuki bangku sekolah, maka perlu upaya untuk
                            mengoptimalkan potensi anak sedini mungkin. Selain tetap membutuhkan perhatian dan kasih
                            sayang orangtua, anak usia 3-6 tahun juga membutuhkan lingkungan pergaulan diluar rumah.
                            Kemajuan zaman yang semakin pesat telah direspon dengan baik oleh pelaku pendidikan untuk
                            mewujudkan “link and mach” di dunia pendidikan dalam rangka menyelaraskan kebutuhan zaman
                            dengan kualitas peserta didik diantara semua jenjang pendidikan. Usaha tersebut telah
                            diwujudkan oleh para akademisi dengan lahirnya Undang-undang No.20 tahun 2003 tentang system
                            Pendidikan Nasional dan ditunjang dengan Peraturan Pemerintah No 19 tahun 2005 tentang
                            Standarisasi pendidikan Nasional.
                            Dengan telah diterbitkannya Peraturan Pemerintah No.19 tahun 2005 tentang standarisasi
                            Pendidikan Nasional, berarti memberikan kesempatan kepada masyarakat berpartisipasi aktif
                            dalam penyelenggaraan pendidikan melalui program pendidikan swadaya. Hal ini dimaksudkan
                            untuk mengantisipasi layanan pendidikan tingkat dasar yang belum sesuai dengan cita-cita dan
                            tujuan program Pendidikan Nasional. Masih banyak anak pada usia pendidikan dasar tidak
                            mendapatkan bekal pendidikan yang cukup pada jenjang pendidikan sebelumnya, sehingga tidak
                            siap menghadapi materi pelajaran yang mereka hadapi. Kenyataan inilah yang melatar belakangi
                            pendirian PKBM Al-Yusro.
                            Untuk tahun ini, minat masyarakat terhadap PKBM Al-Yusro meningkat
                            daripada tahun sebelumnya dan untuk tahun berikutnya Insya Allah minat masyarakat semakin
                            meningkat terhadap program pendidikan yang kami tawarkan. Semakin banyak warga masyarakat
                            yang mempercayakan pendidikan usia dini anak-anak mereka kepada PAUD AL-YUSRO. Meskipun
                            jumlah anak didik meningkat, hal ini tidak merubah visi dan misi lembaga
                            untuk tetap mempertahankan 3 hal: <br>

                            1. Meningkatkan dan mempertahankan kualitas dan layanan pendidikan <br>
                            2. Biaya yang terjangkau <br>
                            3. Pelaksanaan program pendidikan berkelanjutan
                        </p>
                        <br><br>
                        <h4>Data Identitas Lembaga</h4>

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>Nama Lembaga</td>
                                    <td>:</td>
                                    <td>PAUD AL-YUSRO</td>
                                </tr>
                                <tr>
                                    <td>Status Lembaga</td>
                                    <td>:</td>
                                    <td>Swasta</td>
                                </tr>
                                <tr>
                                    <td>Akta Notaris Lembaga</td>
                                    <td>:</td>
                                    <td>Hafsan Hirwan, .SH. Nomor 16</td>
                                </tr>
                                <tr>
                                    <td>No. Induk Lembaga</td>
                                    <td>:</td>
                                    <td>52.005000.200001</td>
                                </tr>
                                <tr>
                                    <td>Izin Operasional</td>
                                    <td>:</td>
                                    <td>421.9/235.16/DIK 1 V.3/2009</td>
                                </tr>
                                <tr>
                                    <td>NPSN AL-YUSRO</td>
                                    <td>:</td>
                                    <td>69843874</td>
                                </tr>
                                <tr>
                                    <td>Type PAUD</td>
                                    <td>:</td>
                                    <td>KB (Kelompok Bermain)</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>jln. Moyot-kabar</td>
                                </tr>
                                <tr>
                                    <td>Rt/RW</td>
                                    <td>:</td>
                                    <td>03 Moyot</td>
                                </tr>
                                <tr>
                                    <td>Desa</td>
                                    <td>:</td>
                                    <td>Moyot</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>:</td>
                                    <td>Sakra</td>
                                </tr>
                                <tr>
                                    <td>Kabupaten</td>
                                    <td>:</td>
                                    <td>Lombok Timur</td>
                                </tr>
                                <tr>
                                    <td>Kode Pos</td>
                                    <td>:</td>
                                    <td>83671</td>
                                </tr>
                                <tr>
                                    <td>NPWP Lembaga</td>
                                    <td>:</td>
                                    <td>81.182.283.2-915.000</td>
                                </tr>
                                <tr>
                                    <td>No. Rekening Lembaga</td>
                                    <td>:</td>
                                    <td>Bank BRI KC Selong No. Rekening: 0157-01-014963-53-0 a/n PAUD AL-YUSRO </td>
                                </tr>
                            </table>
                        </div>
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
                                @foreach ($artikel_terkait as $artikel)
                                <li class="media">
                                    <img src="{{ asset('uploads/artikel/'. $artikel->gambar) }}" class="mr-3" class="img-fluid">
                                    <div class="media-body">
                                        <h6 class="mt-4 mb-1"><a href="{{ route('artikel.detail', $artikel->slug) }}">{{ $artikel->judul }}</a></h6>
                                        <small>di posting:  Admin | {{ $artikel->created_at->diFFforHumans() }}</small>
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