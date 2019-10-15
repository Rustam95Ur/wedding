<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Title -->
    <title> Lovly Wedding - Responsive Wedding Template </title>
    <!-- Icon fonts -->
    <link href="{{asset('fonts/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<body id="home">

<!-- start page-wrapper -->
<div class="page-wrapper">

    <!-- start preloader -->
    <div class="preloader" style="display: none;">
        <div class="inner">
            <span class="icon"><i class="fi flaticon-two"></i></span>
        </div>
    </div>
    <!-- end preloader -->
    <!-- start of hero -->
    <section class="hero">
        <div class="static-hero"></div>
        <div id="video-background" class="video-player mb_YTPlayer isMuted"
             data-property="{videoURL:'https://youtu.be/5pzXdJJ4Djk',containment:'.video-player',autoPlay:true, mute:true, startAt:0, opacity:1}">
            <div class="mbYTP_wrapper" id="wrapper_video-background">
                <iframe id="iframe_video-background" class="playerBox"
                        frameborder="0" allowfullscreen="1"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        title="YouTube video player" width="640" height="360"
                        unselectable="on"></iframe>
                <div class="YTPOverlay"></div>
            </div>
        </div>

        <div class="wedding-announcement">
            <div class="couple-name-merried-text">
                <h2 class="wow slideInUp" data-wow-duration="1s"
                    style="visibility: visible; animation-duration: 1s; animation-name: slideInUp;">Suntina &
                    Famico</h2>
                <div class="married-text wow fadeIn" data-wow-delay="1s"
                     style="visibility: visible; animation-delay: 1s; animation-name: fadeIn;">
                    <h4 class="">
                        <span class="wow fadeInUp" data-wow-delay="1.05s">W</span>
                        <span class="wow fadeInUp" data-wow-delay="1.10s">e</span>
                        <span class="wow fadeInUp" data-wow-delay="1.15s">'</span>
                        <span class="wow fadeInUp" data-wow-delay="1.20s">r</span>
                        <span class="wow fadeInUp" data-wow-delay="1.25s">e</span>
                        <span> </span>
                        <span class="wow fadeInUp" data-wow-delay="1.30s">g</span>
                        <span class="wow fadeInUp" data-wow-delay="1.35s">e</span>
                        <span class="wow fadeInUp" data-wow-delay="1.40s">t</span>
                        <span class="wow fadeInUp" data-wow-delay="1.45s">t</span>
                        <span class="wow fadeInUp" data-wow-delay="1.50s">i</span>
                        <span class="wow fadeInUp" data-wow-delay="1.55s">n</span>
                        <span class="wow fadeInUp" data-wow-delay="1.60s">g</span>
                        <span> </span>
                        <span class="wow fadeInUp" data-wow-delay="1.65s">m</span>
                        <span class="wow fadeInUp" data-wow-delay="1.70s">a</span>
                        <span class="wow fadeInUp" data-wow-delay="1.75s">r</span>
                        <span class="wow fadeInUp" data-wow-delay="1.80s">r</span>
                        <span class="wow fadeInUp" data-wow-delay="1.85s">i</span>
                        <span class="wow fadeInUp" data-wow-delay="1.90s">e</span>
                        <span class="wow fadeInUp" data-wow-delay="1.95s">d</span>

                    </h4>
                </div>
                <!-- <i class="fa fa-heart"></i> -->
            </div>
            <div class="save-the-date popup-save-the-date">
                <h4>Save the date</h4>
                <span class="date">25 DEC 2017</span>
            </div>
        </div>
    </section>
    <!-- end of hero slider -->
    @extends('web.layouts.header')
    @yield('content')
    @extends('web.layouts.footer')

</div>
<!-- end of page-wrapper -->


<!-- All JavaScript files
================================================== -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery-plugin-collection.js')}}"></script>
<script src="{{asset('js/jquery.mb.YTPlayer.src.js')}}"></script>
<!-- Plugins for this template -->

<!-- Custom script for this template -->
<script src="{{asset('js/script.js')}}"></script>


<!----></body>
</html>
