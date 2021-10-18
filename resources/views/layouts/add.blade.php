<!DOCTYPE html>
<html lang="en-us">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content='DG Core'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name='description' itemprop='description' content='DG core is not only an IT company but also a family filled with talented experts that help global brands, enterprises, mid-size businesses or even startups with innovative solutions.
                            Here are gathered very creative and bright minded people who are ready to overcome all kinds of barriers.
                            DG core team is the best people formula for great websites.'/>
    <meta name='keywords'
          content='DG Core, dgcore, laravel, wordpress, vue, frontend, backend, db, database, qa, quality, design, ui, ux, digital marketing, '/>

    <meta property="og:description" content="DG core is not only an IT company but also a family filled with talented experts that help global brands, enterprises, mid-size businesses or even startups with innovative solutions.
                            Here are gathered very creative and bright minded people who are ready to overcome all kinds of barriers.
                            DG core team is the best people formula for great websites."/>
    <meta property="og:title" content="DG Core"/>
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:locale" content="en-us"/>
    <meta property="og:locale:alternate" content="en-us"/>
    <meta property="og:site_name" content="DG Core"/>

    <!-- Title Tag-->
    <title>DG Core | {{$title}}</title>

    <!-- FavIcon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}">
    <link rel="shortcut icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicon/site.webmanifest')}}">

    <!-- Google Fonts & Google Maps API -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr_0Q_Xui8inBGxCmtCIghdFCWNZr88cM"
            type="text/javascript"></script>

    <!-- Hover  Css -->
    <link rel="stylesheet" href="{{asset('site/css/hover.min.css')}}">
    <!-- Mobile Nav -->
    <link rel="stylesheet" href="{{asset('site/css/slicknav.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('site/css/font-awesome.min.css')}}">
    <!-- Animate Min -->
    <link rel="stylesheet" href="{{asset('site/css/animate.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('site/css/magnific-popup.css')}}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{asset('site/css/slick.css')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('site/css/bootstrap.min.css')}}">
    <!-- DG Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('site/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/skin/blue.css')}}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V9YDHDG8L8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-V9YDHDG8L8');
    </script>
</head>
<body class="js">

<!-- Preloader -->
<div class="loader">
    <div class="loader-inner">
        <div class="k-loader k-circle"></div>
    </div>
</div>
<!-- End Preloader -->

<!-- Start Header -->
<header class="header clearfix" id="header">
    <!-- Start Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <!-- Address -->
                    <ul class="address">
                        <li><i class="fa fa-globe"></i>Language: English</li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <a href="tel:+37499099084" style="color: white">+374 99 099 084</a>
                        </li>
                        <li><i class="fa fa-clock-o"></i>Mon - Sat: 10:00 - 19:00 (UTC +4)</li>
                    </ul>
                    <!--/ End Address -->
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <!-- Social -->
                    <ul class="social">
                        <li>
                            <a href="mailto:dgcore999@gmail.com">
                                <i class="fa fa-send"></i>
                                dgcore999@gmail.com
                            </a>
                        </li>
                        <li class="active"><a href="https://www.facebook.com/DgCoreTeam" target="_blank"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li class="active"><a href="https://twitter.com/core_dg" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li class="active"><a href="https://api.whatsapp.com/send?phone=+37499099084" target="_blank">
                                <i class="fa fa-whatsapp"></i></a>
                        </li>
                        <li class="active"><a href="https://t.me/david_dg_core" target="_blank">
                                <i class="fa fa-telegram"></i></a>
                        </li>
                    </ul>
                    <!-- End Social -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Topbar -->

    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="{{asset('site/img/logo/logo1.png')}}" alt="DG Core Logo">
                        </a>
                    </div>
                    <!--/End Logo -->

                    <!-- Mobile Menu -->
                    <div class="mobile-menu"></div>
                    <!--/ End Mobile Menu -->
                </div>
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <!-- Main Menu -->
                    <div class="main-menu">
                        <!-- Navigation -->
                        <nav class="navbar">
                            <div class="collapse navbar-collapse">
                                <ul class="nav menu navbar-nav">
                                    <li class="current"><a href="#header">Home</a></li>
                                    <li><a href="#features">Features</a></li>
                                    <li><a href="#about">About Us</a></li>
                                    <li><a href="#contact">Contact</a></li>
{{--                                    <li><a href="/careers">Careers</a></li>--}}
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!--/ End Header-->

@yield('content')

<!-- Footer Top -->
<footer class="footer wow fadeInUp" id="contact">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4 col-xs-12 ">
                    <div class="single-widget about">
                        <div class="footer-logo">
                            <a href="{{route('home')}}">
                                <img src="{{asset('site/img/logo/logo2.png')}}" alt="DG Core Logo Footer">
                            </a>
                        </div>
                        <p>We are the way to your business success in IT industry!</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-widget contact">
                        <h2>Contact Us</h2>
                        <ul class="list">
                            <li><i class="fa fa-map"></i>Address: Armenia Erevan Tigran Mec 7</li>
                            <li><i class="fa fa-phone"></i>Phone: <a href="tel:+37499099084" style="color: white">+374
                                    99 099 084</a></li>
                            <li><i class="fa fa-envelope"></i>Email:<a href="mailto:dgcore999@gmail.com">dgcore999@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-widget">
                        <h2>Follow Us</h2>
                        <ul class="social-icon">
                            <li class="active"><a href="https://www.facebook.com/DgCoreTeam" target="_blank"><i
                                        class="fa fa-facebook"></i>Facebook</a></li>
                            <li class="active"><a href="https://twitter.com/core_dg" target="_blank"><i class="fa fa-twitter"></i>Twitter</a></li>
                            <li class="active">
                                <a href="https://api.whatsapp.com/send?phone=+37499099084" target="_blank">
                                    <i class="fa fa-whatsapp"></i>Whatsapp
                                </a>
                            </li>
                            <li class="active">
                                <a href="https://t.me/david_dg_core" target="_blank">
                                    <i class="fa fa-telegram"></i>Telegram
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <p>Development By DG Core Best Team!</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Jquery -->
<script type="text/javascript" src="{{asset('site/js/jquery.min.js')}}"></script>
<!-- Modernizr JS -->
<script type="text/javascript" src="{{asset('site/js/modernizr.min.js')}}"></script>
<!-- Appear Js -->
<script type="text/javascript" src="{{asset('site/js/jquery.appear.js')}}"></script>
<!-- Scrool Up -->
<script type="text/javascript" src="{{asset('site/js/jquery.scrollUp.min.js')}}"></script>
<!-- Typed Js -->
<script type="text/javascript" src="{{asset('site/js/typed.min.js')}}"></script>
<!-- Slick Nav -->
<script type="text/javascript" src="{{asset('site/js/jquery.slicknav.min.js')}}"></script>
<!-- Onepage Nav -->
<script type="text/javascript" src="{{asset('site/js/jquery.nav.js')}}"></script>
<!-- Yt Player -->
<script type="text/javascript" src="{{asset('site/js/ytplayer.min.js')}}"></script>
<!-- Magnific Popup -->
<script type="text/javascript" src="{{asset('site/js/magnific-popup.min.js')}}"></script>
<!-- Wow JS -->
<script type="text/javascript" src="{{asset('site/js/wow.min.js')}}"></script>
<!-- Counter JS -->
<script type="text/javascript" src="{{asset('site/js/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('site/js/jquery.counterup.min.js')}}"></script>
<!-- Isotop JS -->
<script type="text/javascript" src="{{asset('site/js/isotope.pkgd.min.js')}}"></script>
<!-- Masonry JS -->
<script type="text/javascript" src="{{asset('site/js/masonry.pkgd.min.js')}}"></script>
<!-- Slick Slider -->
<script type="text/javascript" src="{{asset('site/js/slick.min.js')}}"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="{{asset('site/js/bootstrap.min.js')}}"></script>
<!-- Activate JS -->
<script type="text/javascript" src="{{asset('site/js/active.js')}}"></script>
@stack('footer')
</body>
</html>
