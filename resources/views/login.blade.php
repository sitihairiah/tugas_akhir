<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login - Pegadaian</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{ url('public/admin') }}/logo.png">
    <link href="{{ url('public/admin') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/admin') }}/assets/css/app-rtl.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="account-body accountbg">


    <div class="container mt-2">
        <div class="row vh-100 d-flex justify-content-center">

            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-12">
                                    <x-utils.notif />
                
                                </div>
                            </div>
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <a href="index.html" class="logo logo-admin">
                                        <img src="{{ url('public/admin') }}/logo.png" height="50" alt="logo"
                                            class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">
                                        Selamat Datang Di Sistem Pegadaian Ketapang
                                    </h4>
                                    <p class="text-muted  mb-0">Silahkan Login</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav-border nav nav-pills" role="tablist">

                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active p-3 pt-3" role="tabpanel">
                                        <form class="form-horizontal auth-form my-4" action="{{ url('login') }}"
                                            method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="username"
                                                        placeholder="Masukan username">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="userpassword">Password</label>
                                                <div class="input-group mb-3">
                                                    <input type="password" class="form-control" name="password"
                                                        placeholder="**********">
                                                </div>
                                            </div>



                                            <div class="form-group mb-0 row">
                                                <div class="col-12 mt-2">
                                                    <button class="btn btn-primary btn-block waves-effect waves-light">LogIn <i
                                                            class="fas fa-sign-in-alt ml-1"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="m-3 text-center text-muted">
                                            {{-- <p class="">Anda Tidak Memiliki Akun ?
                                                <a href="{{ url('register') }}" class="text-primary ml-2"> Register </a>
                                            </p> --}}
                                        </div>

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
