<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('tieudetrangadmin')</title>

    <link rel="icon" href="{{ asset('../public/img/core-img/favicon.ico') }}">

<!-- Core Stylesheet -->
    <link href="{{asset('public/css/admin/theme.css')}}" rel="stylesheet">
    <script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
    <link href="{{asset('public/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('public/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('public/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/vector-map/jqvmap.min.css')}}" rel="stylesheet" media="all">
<!-- Responsive CSS -->


</head>
<body>
        <div class="page-wrapper">
    @include('admin.layout.header')
    @include('admin.layout.nav')
    <div class="page-container">
 <div class="main-content">
        <div class="section__content section__content--p30">
                <div class="container-fluid">
                        <div class="row">
                                <div class="col-lg-12">
                                        @yield('contentadmin')
                                    </div>
        
                        </div>
                </div>
        </div>
 </div>
    </div>
        </div>
    <!-- Jquery JS-->
    <script src="{{asset('public/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('public/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('public/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('public/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('public/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('public/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('public/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('public/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('public/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('public/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('public/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('public/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('public/vendor/select2/select2.min.js')}}">
    </script>
    <script src="{{asset('public/vendor/vector-map/jquery.vmap.js')}}"></script>
    <script src="{{asset('public/vendor/vector-map/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('public/vendor/vector-map/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('public/vendor/vector-map/jquery.vmap.world.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('public/js/main.js')}}"></script>

</body>
</html>
