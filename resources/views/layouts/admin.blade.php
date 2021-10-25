<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('admindash/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('admindash/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admindash/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admindash/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('admindash/vendor/charts/morris-bundle/morris.css')}}">
    <link rel="stylesheet" href="{{asset('admindash/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admindash/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <title>{{$title}}</title>
    @stack('header')
</head>

<body>
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">

        <!-- navbar -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="/admin">LOGO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fa fa-burn"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <h5 class="mb-0 nav-user-name">
                                    {{ Auth::user()->username }}</h5>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                                 aria-labelledby="navbarDropdownMenuLink2">
                                <a class="dropdown-item" href="#"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-power-off mr-2"></i>Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}"
                                      method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end navbar -->

        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/admin">
                                    <i class="fas fa-f fa-home"></i>
                                    Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/admin/slider-one">
                                    <i class="fas fa-f fa-images"></i>
                                    Slider One
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/admin/slider-two">
                                    <i class="fas fa-f fa-images"></i>
                                    Slider Two
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/admin/slider-circle">
                                    <i class="fas fa-f fa-circle-notch"></i>
                                    Slider Circle
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/admin/referrals">
                                    <i class="fas fa-f fa-baseball-ball"></i>
                                    Referrals
                                </a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- end left sidebar -->

        <!-- wrapper  -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content ">
                @yield('content')
            </div>
        </div>
        <!-- end wrapper  -->

</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="{{asset('admindash/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
<!-- bootstap bundle js -->
<script src="{{asset('admindash/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<!-- slimscroll js -->
<script src="{{asset('admindash/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
<!-- main js -->
<script src="{{asset('admindash/libs/js/main-js.js')}}"></script>
<!-- sparkline js -->
<script src="{{asset('admindash/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
<!-- morris js -->
<script src="{{asset('admindash/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
<script src="{{asset('admindash/vendor/charts/morris-bundle/morris.js')}}"></script>
@stack('footer')
</body>

</html>
