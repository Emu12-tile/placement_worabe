<!DOCTYPE html>
<!--
Template Name: Pinkman - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework

License: You must have a valid license purchased only from themeforest to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Result</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    {{-- select 2 --}}
    {{-- <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" /> --}}
    <!-- vector map CSS -->
    <link href="{{ asset('assets/vendors/vectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="{{ asset('assets/vendors/jquery-toggles/css/toggles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendors/jquery-toggles/css/themes/toggles-light.css') }}" rel="stylesheet"
        type="text/css">

    <!-- Toastr CSS -->
    <link href="{{ asset('assets/vendors/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet"
        type="text/css">
    {{-- select 2 --}}
    <link href="{{ asset('assets/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css">


    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" target="_blank"
        rel="nofollow" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="{{ asset('assets/dist/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendors/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('assets/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}"
        rel="stylesheet" type="text/css" />
    {{-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <style>
        /* .bodypdf {
            height: 100%;
            padding: 0;
            padding-bottom: 100px;
        } */

        .footerpdf {
            /* position: fixed;
            bottom: 0;
            height: 50px;
            width: 100%;
            background-color: #ddd;
            text-align: center; */
            /* position: fixed; */
            text-align: center;
            background-color: #ddd;
            font-size: 1em;
            width: 100%;
            /* top:1100px; */
            height: 40px;
            overflow: hidden;

            bottom: 0;
        }

        .footerpdf>p {
            margin-top: calc(20px - 0.5em);
            /* margin-bottom: calc(20px-0.5em) */
            height: auto;
        }

        /* @font-face {
            font-family: 'noto sans ethiopic', sans-serif;
            font-style: normal;
            font-weight: normal;

            src: url('https://fonts.googleapis.com/css2?family=Noto+Sans+Ethiopic&display=swap.ttf') format('truetype');
        } */
        /* @font-face {
            font-family: 'Noto Sans Ethiopic';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            src: url(https://fonts.gstatic.com/s/notosansethiopic/v42/7cHPv50vjIepfJVOZZgcpQ5B9FBTH9KGNfhSTgtoow1KVnIvyBoMSzUMacb-T35OK5D1yGbuaQ.woff2) format('woff2');
            unicode-range: U+1200-1399, U+2D80-2DDE, U+AB01-AB2E;
        } */

      
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(2) {
            /* background-color: #6d6a6a; */
        }

        /* #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        } */

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            /* background-color: #5f5656; */
            color: rgb(29, 28, 28);
        }
    </style>


</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->

    <!-- HK Wrapper -->
    <div class="hk-wrapper hk-vertical-nav">



        <x-nav />
        <!-- /Top Navbar -->

        <x-sidenav />


        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Container -->
            <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">

                <!-- Row -->
                <main>

                    @yield('content')
                    @yield('layouts.navigation')


                </main>
                <!-- /Row -->
            </div>
            <!-- /Container -->

            <!-- Footer -->
            <x-footer />
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('assets/dist/js/jquery.slimscroll.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('assets/dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{ asset('assets/dist/js/feather.min.js') }}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{ asset('assets/vendors/jquery-toggles/toggles.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/toggle-data.js') }}"></script>

    <!-- Counter Animation JavaScript -->
    <script src="{{ asset('assets/vendors/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery.counterup/jquery.counterup.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/select2-data.js') }}"></script>


    <!-- Sparkline JavaScript -->
    <script src="{{ asset('assets/vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script>

    <!-- Vector Maps JavaScript -->
    <script src="{{ asset('assets/vendors/vectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/vendors/vectormap/jquery-jvectormap-de-merc.js') }}"></script>
    <script src="{{ asset('assets/dist/js/vectormap-data.js') }}"></script>

    <!-- Owl JavaScript -->
    <script src="{{ asset('assets/vendors/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- Toastr JS -->
    {{-- <script src="{{asset('assets/vendors/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script> --}}

    <!-- Apex JavaScript -->
    <script src="{{ asset('assets/vendors/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/irregular-data-series.js') }}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('assets/dist/js/init.js') }}"></script>
    {{-- <script src="{{ asset('assets/dist/js/dataTables-data.js') }}"></script> --}}

    <script src="{{ asset('assets/vendors/editable-table/mindmup-editabletable.js') }}"></script>
    <script src="{{ asset('assets/vendors/editable-table/numeric-input-example.js') }}"></script>
    <script src="{{ asset('assets/dist/js/editable-table-data.js') }}"></script>


    {{-- datatable
         --}}

    <script src="{{ asset('assets/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jszip/dist/jszip.min.js') }}"></script>
    {{-- <script src="{{asset('assets/vendors/pdfmake/build/pdfmake.min.js')}}"></script> --}}
    {{-- <script src="{{asset('assets/vendors/pdfmake/build/vfs_fonts.js')}}"></script> --}}
    <script src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/dataTables-data.js') }}"></script>
    {{-- select 2 --}}
    <script src="{{ asset('assets/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/select2-data.js') }}"></script>

    <script src="{{ asset('assets/vendors/tablesaw/dist/tablesaw.jquery.js') }}"></script>
    <script src="{{ asset('assets/dist/js/tablesaw-data.js') }}"></script>

    {{-- <script src="{{ asset('assets/vendors/jquery-toggles/toggles.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/toggle-data.js') }}"></script> --}}
</body>

</body>
@yield('javascript')


</html>
