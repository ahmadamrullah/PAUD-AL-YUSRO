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
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h3 style="text-align: center; font-family: 'Times New Roman'; font-weight: bold; margin-bottom: 30px;">
                Data Siswa Paud Al-Yusro</h3>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nisn</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Jk</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=1;
                        @endphp
                        @forelse ($siswas as $siswa)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $siswa->nisn }}</td>
                                <td>{{ $siswa->nama }}</td>
                                <td>{{ $siswa->alamat }}</td>
                                <td>{{ $siswa->jk }}</td>
                                <td>{{ $siswa->kelas }}</td>
                            </tr>
                        @empty
                            
                        @endforelse
                        
                        @php
                            $i++;
                        @endphp
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection