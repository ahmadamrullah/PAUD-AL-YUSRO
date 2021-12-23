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
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 detail-sambutan">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('assets') }}/img/guru1.jpg" alt="kepala sekolah" class="rounded-circle mx-auto d-block mt-5 mb-4"
                            width="200" height="220">

                        <h4>Link Terkait :</h4>
                        <ul>
                            <li><a href="">Sambutan Kepala Sekolah</a></li>
                            <li><a href="">Visi & Misi</a></li>
                            <li><a href="">Struktur Organisasi</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <h3>Sambutan Kepala Sekolah</h3>
                        <p>
                        Pendidikan anak usia dini (PAUD) Terpadu adalah jenjang pendidikan sebelum jenjang pendidikan dasar yang merupakan suatu upaya pembinaan yang ditujukan bagi anak sejak lahir sampai dengan usia enam tahun yang dilakukan melalui pemberian rangsangan pendidikan untuk membantu pertumbuhan dan perkembangan jasmani dan rohani agar anak memiliki kesiapan dalam memasuki pendidikan lebih lanjut, yang diselenggarakan pada jalur formal, nonformal, dan informal. Menurut ayat suci yang termaktub dalam Al_Qur’an dijelaskan bahwa anak lahir seperti kertas putih, anak tersebut akan menjadi anak Majusi atau Yahudi, tergantung oleh pendidikan yang diperoleh. Pendidikan untuk anak usia dini juga sangat penting dalam pembentukan karakter pada anak. Menurut Islam pendidikan anak dimulai sejak anak dalam kandungan. Pada usia dini merupakan masa-masa Golden Age, pada masa golden age berumur 0-6 tahun pada masa ini otak anak berkembang 80%. Pada masa ini pula anak-anak mudah dibentuk oleh karena itu Anak perlu dibimbing dengan cara yang baik dan sesuai dengan usianya, agar nantinya dia menjadi anak yang unggul dalam agama maupun intelektualnya. Oleh Karena itu peran pendidik dan orang tua dalam mendidik anak sangat penting. Orang tua dan pendidik harus melihat potensi anak yang dimilikinya dan orang tua maupun pendidik harus membantu mengembangkan potensi yang dia miliki, dan jangan sampai orang tua memaksa kehendak pada anaknya. Kami memberikan pelayanan pendidikan dengan sepenuh hati kepada seluruh peserta didik, anak-anak yang kami cintai sepenuh hati. PAUD Terpadu Al Muthmainnah adalah salah satu wadah bermain dan belajar bagi anak-anak kita. PAUD Terpadu Al Muthmainnah siap membantu para orang tua untuk menyelamatkan “Usia Emas” putra putrinya.Perencanaan pembelajaran pada program PAUD Al-Fathonah Segedong sudah disusun dengan matang untuk memberikan arah yang tepat dalam proses pembelajarannya dengan mempertimbangkan keseimbangan antara pendidikan umum dan pendidikan keagamaan.Semoga apa yang akan kami berikan melalui website PAUD Terpadu Al Muthmainnah dapat bermanfaat bagi anak didik. orang tua murid, masyarakat dan sekolah. Akhir kata, tak lupa kami mengucapkan terimakasih kepada semua pihak yang terlibat dalam mewujudkan Website ini. Semoga semua yang kami lakukan memberi manfaat bagi kemajuan.
                        Wassalamu’alaikum Warah Matullah Wabarakatuh
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection