<!DOCTYPE html>
<!--
Template Name: Pinkman - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework

License: You must have a valid license purchased only from themeforest to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>AASTU</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Lightgallery CSS -->
    <link href="{{ asset('assets/dist/css/lightgallery.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/dist/css/style.css') }}" rel="stylesheet" type="text/css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->

    <!-- HK Wrapper -->
    <div class="hk-wrapper hk-alt-nav hk-landing">
        <div class="fixed-top bg-white shadow-sm">
            <div class="container px-0">
                <nav class="navbar navbar-expand-xl navbar-light hk-navbar hk-navbar-alt shadow-none">
                    <a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);"
                        data-toggle="collapse" data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt"
                        aria-expanded="false" aria-label="Toggle navigation"><span class="feather-icon"><i
                                data-feather="menu"></i></span></a>
                    <a class="navbar-brand" href="https://mint.gov.et/?lang=en">
                        <img class="brand-img d-inline-block align-top"
                            src="data:image/jpeg;base64,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"
                            style="width:300px;height:100px"alt="brand" />
                    </a>

                    <div class="collapse navbar-collapse ml-auto" id="navbarCollapseAlt">
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item">
                                {{-- <a class="nav-link" data-scroll href="{{ route('login') }}">Login as</a> --}}
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light">Login as</button>
                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('login') }}">የሰው ኃይል</a>
                                        <a class="dropdown-item" href="#">ፕሬዚዳንት</a>

                                    </div>
                                </div>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li> --}}
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        @yield('content')
        <div class="hk-footer-wrap container">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <p>Pampered by<a href="https://hencework.com/" class="text-dark" target="_blank">Hencework</a> ©
                            2019</p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p class="d-inline-block">Follow us</p>
                        <a href="#"
                            class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span
                                class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                        <a href="#"
                            class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span
                                class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                        <a href="#"
                            class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span
                                class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /Footer -->

    </div>
    <!-- /Main Content -->


    <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Owl JavaScript -->
    <script src="{{ asset('assets/vendors/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{ asset('assets/dist/js/feather.min.js') }}"></script>

    <!-- Gallery JavaScript -->
    <script src="{{ asset('assets/vendors/lightgallery/dist/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/froogaloop2.min.js') }}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('assets/dist/js/lightgallery-all.js') }}"></script>
    <script src="{{ asset('assets/dist/js/landing-data.js') }}"></script>
    <script src="{{ asset('assets/dist/js/init.js') }}"></script>
</body>
@yield('javascript')

</html>
