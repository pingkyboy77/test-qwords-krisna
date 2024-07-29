<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Login | Qwords Company International</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/img-5.png') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>


    <body>
        <style>
            .authentication-bg{
                background: url("{{ asset('assets/images/bg-2.png') }}") center center;
                background-size: cover;
            }
        </style>
    <!-- <body data-layout="horizontal"> -->

        {{-- @extends('auth.app-login') --}}
<div class="authentication-bg min-vh-100">
        <div class=" bg-overlay bg-opacity-80 bg-dark">
        </div>
<div class="container">
            <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-9 col-lg-8 col-xl-6">

                        <div class="mb-4 pb-2 d-flex container-fluid gap-3 justify-content-center align-items-center">
                            <a href="#" class="d-block auth-logo">
                                <img src="{{ asset('assets/images/img-5.png') }}" alt="" height="90" class="auth-logo-dark me-start">
                                <img src="{{ asset('assets/images/img-5.png') }}" alt="" height="90" class="auth-logo-light me-start">
                            </a>
                            <h3 class=" fw-bolder text-center text-uppercase text-light" style="font-family: jakarta-sans, sans-serrif">Qwords Company International</h3>
                        </div>

                        <div class="card bg-dark">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-light">Welcome Back !</h5>
                                    <p class="text-muted">Qwords Company International</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form action="{{ route('proses.login') }}" method="POST">
                                    <form action="" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label text-light" for="email">Email</label>
                                            <div class="position-relative input-custom-icon">
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Identitas Number">
                                                 <span class="bx bx-user"></span>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="float-end">
                                            </div>
                                            <label class="form-label text-light" for="password-input">PASSWORD</label>
                                            <div class="position-relative auth-pass-inputgroup input-custom-icon">
                                                <span class="bx bx-lock-alt"></span>
                                                <input type="password" class="form-control" id="password-input" name="password" placeholder="Enter password">
                                                <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                    <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <span class="text-light ">Masuk Sebagai <a href="{{ route('home') }}"><span>Guest</span></a></span>
                                        </div>


                                        <div class="mt-3">
                                            <button class="btn btn-light w-100 waves-effect waves-light text-dark" type="submit">Log In</button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center p-4">
                            <p class="text-light">© <script>document.write(new Date().getFullYear())</script> - Krisna Yuda Nugraha</p>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- end container -->

    </div>

    <!-- end authentication section -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenujs/metismenujs.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/eva-icons/eva.min.js') }}"></script>

        <script src="{{ asset('assets/js/pages/pass-addon.init.js') }}"></script>

    </body>

</html>
