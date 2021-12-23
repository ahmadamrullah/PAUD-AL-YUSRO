
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <!-- fontawesome.css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fontawesome/css/all.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>

    @stack('jumbotron')

    {{-- content --}}
    @yield('content')
    {{-- end content --}}

    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg footer">
                    <div class="row">
                        <div class="col-lg-3">
                            <h4>Sosial Media Kami</h4>
                            <ul class="social-media">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                            </ul>
                            <p>
                                Ayo Follow dan ikuti informasi seputar kegiatan kami di PKBM PAUD AL-YUSRO di sosial
                                media kami
                            </p>
                        </div>
                        <div class="col-lg-3">
                            <h4>Tentang PAUD AL-YUSRO</h4>
                            <p>
                                Paud Al-yusro merupakan sebuah lembaga PKBM yang bergerak untuk mengarahkan masyarkat ke
                                yang lebih baik lagi
                            </p>
                        </div>
                        <div class="col-lg-3">
                            <h4>Link Tautan Kami</h4>
                            <ul>
                                <li><a href="">Sambutan Kepala Sekolah</a></li>
                                <li><a href="">Program Pendidikan</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">Tentang Kami</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <h4>Informasi Terkini</h4>
                            <ul>
                                <li><a href="">Penerimaan siswa baru</a></li>
                                <li><a href="">Kegiatan kerja bakti di setiap hari jumat</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section class="akhir">
        <div class="container">
            <div class="row justify-content-center">
                <p>@copyright reversed By Paud Al-Yusro Moyot</p>
            </div>
        </div>
    </section>
    <!-- akhir footer -->


    <script src="{{ asset('assets') }}/js/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/fontawesome/js/all.min.js"></script>
    <script src="{{ asset('assets') }}/js/popper.min.js"></script>
</body>

</html>