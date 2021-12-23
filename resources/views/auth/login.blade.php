<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css">
</head>
<style>
    body {
        background-color: gainsboro;
    }
    .sisi-kiri h3 {
        text-align: center;
        font-weight: bold;
        margin-top: 30px;
    }
    .sisi-kiri p {
        text-align: center;
        font-size: 20px;
        font-family: Tahoma;
    }

    .sisi-kanan form label {
        font-family: Tahoma;
    }
    .sisi-kanan form {
        font-family: Tahoma;
    }

    .sisi-kanan form button {
        font-family: Tahoma;
        font-size: 20px;
    }
</style>
<body>

    <div class="container" style="margin-top: 15%;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        @if (session('pesan'))
                            <div class="alert alert-danger" role="alert">
                               <p class="text-center"> {{ session('pesan') }}</p>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-6 sisi-kiri">
                                <h3>Selamat Datang!</h3>
                                <p>Silahkan memasukan email dan password anda untuk bisa mengakses layanan informasi PAUD Al-Yusro.</p>
                            </div>
                            <div class="col-lg-6 sisi-kanan">
                                <form action="{{ route('login.post_login') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="masukan email yang valid">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="******">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-danger">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="{{ asset('assets') }}/js/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/fontawesome/js/all.min.js"></script>
    <script src="{{ asset('assets') }}/js/popper.min.js"></script>
</body>
</html>