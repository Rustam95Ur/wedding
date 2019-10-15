<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Title -->
    <title>Оркен & Асель</title>
    <!-- Icon fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
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
             data-property="{videoURL:'https://youtu.be/pW-zMTnH2pU',containment:'.video-player',autoPlay:true, mute:false, startAt:0, opacity:1}">
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
            
            <div class="save-the-date popup-save-the-date">
                <h4>Дата</h4>
                <span class="date">16 ноября начало в 17:00</span>
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

@if ($message = Session::get('success') or $message = Session::get('error') or $message = Session::get('warning') or $message = Session::get('info') or $errors->any())
    <script>
        $(function () {
            $('#messageModal').modal('show');
            setTimeout(function () {
                $('#messageModal').modal('hide')
            }, 4000);
        });
    </script>
@endif
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="text-center text-success">{!! $message !!}</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ваше пожелание</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('comment-add')}}" method="post">
                @csrf
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control"  name="name"
                                   placeholder="Ваше имя">
                        </div>
                        <div class="form-group">
                        <textarea class="form-control"  name="text" rows="3"
                                  placeholder="Ваше пожелание"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">закрыть</button>
                    <input type="button" class="submit-btn">Отправить</input>
                </div>
            </form>
        </div>
    </div>
</div>
<!----></body>
</html>
