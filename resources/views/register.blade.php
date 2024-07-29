<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register - Pegadaian</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <link rel="shortcut icon" href="{{ url('public/admin') }}/politap.png">


    <link href="{{ url('public/admin') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/admin') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="account-body accountbg">


    <div class="container mt-2">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-md-12 align-self-center">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <x-utils.notif />
                    
                                    </div>
                                </div>
                                <div class="text-center p-3">
                                    <a href="index.html" class="logo logo-admin">
                                        <img src="{{ url('public/admin') }}/politap.png" height="50" alt="logo"
                                            class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">
                                        Selamat Datang Di Sistem Pegadaian Ketapang
                                    </h4>
                                    <p class="text-muted  mb-0">Silahkan Melakukan Register</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav-border nav nav-pills" role="tablist">

                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane active px-3 pt-3" role="tabpanel">
                                        <form action="{{ url('register') }}" method="POST"
                                            enctype="multipart/form-data" class="form-horizontal auth-form my-4">
                                            @csrf
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="nik"
                                                        placeholder="Masukan Nomor Induk Kependudukan">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="nama"
                                                        placeholder="Masukan Nama Lengkap Sesuai KTP">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Username</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="username"
                                                        placeholder="Masukan Username">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Password</label>
                                                <div class="input-group mb-3">
                                                    <input type="password" class="form-control" name="confirmasi_password"
                                                        placeholder="************">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Alamat </label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="alamat"
                                                        placeholder="Masukan Alamat Lengkap Anda">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Nomor HP</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="nomor_hp"
                                                        placeholder="Masukan Nomor HP Anda">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Pas Poto</label>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" name="poto"
                                                        accept=".jpg, .png, .jpeg">
                                                </div>
                                            </div>

                                            <div class="form-group mb-0 row">
                                                <div class="col-12 mt-2">
                                                    <button class="btn btn-primary btn-block waves-effect waves-light">
                                                        Register
                                                        <i class="fas fa-sign-in-alt ml-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <p class="mb-0 text-muted"> Anda Sudah Memiliku Akun ?
                                            <a href="{{ url('login') }}" class="text-primary ml-2">Login</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body bg-light-alt text-center">
                                <span class="text-muted d-none d-sm-inline-block">Pegadaian © {{ date('Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('public/admin') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/js/waves.js"></script>
    <script src="{{ url('public/admin') }}/assets/js/feather.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/js/simplebar.min.js"></script>


</body>

</html>
