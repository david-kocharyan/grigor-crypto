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
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/jquery.mb.ytplayer.min.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('site/css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/slick.css')}}">

{{--    <link rel="shortcut icon" href="images/favicon.png">--}}
{{--    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">--}}
{{--    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">--}}
{{--    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">--}}
</head>

<body id="home2" class="home2">
    <div class="loder"></div>

    <div class="wrapper">
        <header id="header">
            <div class="header navbar">
                <div class="container-fluid">
                    <div class="navbar-header pull-right"> <a class="navbar-brand" href="/"> <img alt="Bitcoin" src="{{asset('site/img/logo/logo1.png')}}"> </a> </div>
                    <div class="navbar-header pull-left"> <p class="navbar-brand">Lorem Ipsum dolor sit a met</p> </div>
                </div>
            </div>
        </header>

        @yield('content')

        <div class="footer bg-dark ptb_20 p">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="copyright-part mtb_10">@ 2019 All Rights Reserved Bitcoin</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<!-- =====  SCRIPT START  ===== -->
<script src="{{ asset('site/js/jQuery_v3.1.1.min.js') }}"></script>
<script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('site/js/letters-type.js') }}"></script>
<script src="{{ asset('site/js/menu.js') }}"></script>
<script src="{{ asset('site/js/custom.js') }}"></script>
<script src="{{ asset('site/js/circle-progress.js') }}"></script>
<script src="{{ asset('site/js/circle-progress-examples.js') }}"></script>
<script src="{{asset('site/js/parallax.js')}}"></script>
<script src="{{asset('site/js/jquery.easeScroll.js')}}"></script>
<script type="text/javascript" src="{{asset('site/js/slick.min.js')}}"></script>

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
