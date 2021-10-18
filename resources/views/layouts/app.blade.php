<!DOCTYPE html>
<html lang="en-us">
<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <title>Bitcoin</title>
    <!-- =====  SEO MATE  ===== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="2 Days">
    <meta name="robots" content="ALL">
    <meta name="rating" content="8 YEARS">
    <meta name="Language" content="en-us">
    <meta name="GOOGLEBOT" content="NOARCHIVE">
    <!-- =====  MOBILE SPECIFICATION  ===== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width">
    <!-- =====  CSS  ===== -->
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/animation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/jquery.mb.ytplayer.min.css')}}" media="all">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>

<body id="home2" class="home2">
    <!-- =====  LODER  ===== -->
    <div class="loder"></div>

    <div class="wrapper">
        <!-- =====  HEADER START  ===== -->
        <header id="header">
            <div class="header navbar">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header pull-left"> <a class="navbar-brand" href="index.html"> <img alt="Bitcoin" src="images/logo2.png"> </a> </div>
                    <!-- Collection of nav links, forms, and other content for toggling -->
                    <div id="navbarCollapse" class="navbar-collapse navbar-right">
                        <nav id="menu" class='collapse'>
                            <!-- Navigation Menu -->
                            <ul class="nav">
                                <li class="active"> <a href="#home2">Home</a></li>
                                <li> <a href="#about">About</a></li>
                                <li> <a href="#service">Service</a></li>
                                <li> <a href="#prices">prices</a></li>
                                <li> <a href="#team">Team</a></li>
                                <li> <a href="#client">Testimonial</a></li>
                                <li> <a href="#blogs">Blogs</a></li>
                                <li> <a href="#contact">Contact</a></li>
                            </ul>
                            <!--End Navigation Menu -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- =====  HEADER END  ===== -->

        @yield('content')

        <!-- =====  FOOTER START  ===== -->
        <div class="footer bg-dark ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="footer-link">
                            <ul>
                                <li> <a href="#">Home</a></li>
                                <li> <a href="#">Service</a></li>
                                <li> <a href="#">Work</a></li>
                                <li> <a href="#">About</a></li>
                                <li> <a href="#">Team</a></li>
                                <li> <a href="#">Blogs</a></li>
                                <li> <a href="#">Testimonial</a></li>
                                <li> <a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="copyright-part mtb_10">@ 2019 All Rights Reserved Bitcoin</div>
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =====  FOOTER END  ===== -->
    </div>
    <!-- =====  WRAPPER END  ===== -->
</body>


<!-- =====  SCRIPT START  ===== -->
<script src="{{ asset('site/js/jQuery_v3.1.1.min.js') }}"></script>
<script src="{{ asset('site/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('site/js/letters-type.js') }}"></script>
<script src="{{ asset('site/js/menu.js') }}"></script>
<script src="{{ asset('site/js/custom.js') }}"></script>
<script src="{{ asset('site/js/particles/particles.js') }}"></script>
<script src="{{ asset('site/js/particles/app.js') }}"></script>
<script src="{{ asset('site/js/circle-progress.js') }}"></script>
<script src="{{ asset('site/js/circle-progress-examples.js') }}"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT3mI0RI16q19Oxv93gSxN0cF0wfxWN6w">
</script>
<script src="{{asset('site/js/parallax.js')}}"></script>
<script src="{{asset('site/js/jquery.easeScroll.js')}}"></script>
<script type="text/javascript">
    $("html").easeScroll();
    // Add scrollspy to <body>
    $('body').scrollspy({ target: '#menu' })
    $("#menu ul li a[href^='#'], .home-arrow-down a").on('click', function(e) {
        // prevent default anchor click behavior
        e.preventDefault();
        // store hash
        var hash = this.hash;
        // animate
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 1500, function() {
            // when done, add hash to url
            // (default click behaviour)
            window.location.hash = hash;
        });
    });
</script>
<!-- =====  SCRIPT END  ===== -->
</html>
