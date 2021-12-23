<nav class="navbar navbar-expand-lg navbar-light fixed-top ">
    <div class="container">
        <a class="navbar-brand" href="#">
            <div class="header">
                <img src="{{ asset('assets') }}/img/logo al-yusro.png">
                <p><strong>PAUD AL-YUSRO</strong> <br> <small>KABUPATEN LOMBOK
                        TIMUR</small></p>

            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda.index') }}">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profile Sekolah
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('sejarah.index') }}">Sejarah PKBM</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('sambutan.detail') }}">Sambutan Kepala Sekolah</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('sambutan.visi') }}">Visi & Misi</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('sambutan.struktur') }}">Struktur Organisasi</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('sambutan.data_siswa') }}">Data Siswa</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('sambutan.data_guru') }}">Data Guru & Karyawan</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="download_file.html">Download</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="gallery.html">Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('artikel.index') }}">Artikel</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="tentang_kami.html">Tentang Kami</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
