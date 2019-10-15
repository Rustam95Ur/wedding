@extends('web.layouts.app')
@section('content')
    <!-- start wedding-couple-section -->

    <section class="story-section section-padding" id="story">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title">
                        <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                        <h2>love store video</h2>
                    </div>
                </div>
            </div> <!-- end section-title -->

            <div class="row content">
                <div class="col col-lg-8 col-lg-offset-2">
                    <div class="img-holder video-holder">
                        <img src="img/img-8.jpg" alt=""
                             class="img img-responsive">
                        <a href="https://www.youtube.com/embed/5pzXdJJ4Djk?autoplay=1" data-type="iframe"
                           class="video-play-btn">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>

    <!-- start count-down-section -->
    <section class="count-down-section section-padding parallax" data-bg-image="img/img-9.jpg" data-speed="7"
             style="background-image: url(img/img-9.jpg); background-position: 50% -164.571px; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col col-md-4">
                    <h2><span>Мы ждем.....</span> Приключение</h2>
                </div>
                <div class="col col-md-7 col-md-offset-1">
                    <div class="count-down-clock">
                        <div id="clock">
                            <div class="box">
                                <div>70</div>
                                <span>Дней</span></div>
                            <div class="box">
                                <div>12</div>
                                <span>Часов</span></div>
                            <div class="box">
                                <div>16</div>
                                <span>Минут</span></div>
                            <div class="box">
                                <div>31</div>
                                <span>Секунд</span></div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end count-down-section -->


    <!-- start story-section -->
    <section class="events-section section-padding" id="events">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title">
                        <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                        <h2>Свадебные мероприятия</h2>
                    </div>
                </div>
            </div> <!-- end section-title -->

            <div class="row">
                <div class="col col-lg-10 col-lg-offset-1">
                    <div class="event">
                        <div class="img-holder">
                            <img src="img/img-2(2).jpg" alt=""
                                 class="img img-responsive">
                        </div>
                        <div class="details">
                            <h3>Wedding party</h3>
                            <ul>
                                <li><i class="fa fa-map-marker"></i> 32 big bro road, Chanpai, London.</li>
                                <li><i class="fa fa-clock-o"></i> Nov 25 2017, 9AM - 5PM</li>
                            </ul>
                            <p>when an unknown printer took a galley of type and scrambled it to make a type specimen
                                book. It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. </p>
                            <a class="see-location-btn popup-gmaps"
                               href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.0160484383277!2d144.99053291585201!3d-37.81309307975254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642ef89a7e023%3A0xb1353055e38c1ab8!2sNew+York+Tomato+Cafe!5e0!3m2!1sbn!2sbd!4v1503743893919">
                                See location <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end story-section -->

    <!-- start cta -->
    <section class="cta section-padding parallax" data-bg-image="img/img-2.jpg" data-speed="7"
             style="background-image: url(img/img-1.jpg); background-position: 50% -477.616px; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2><span>Мы собираемся...</span> Отпразднуйте нашу любовь</h2>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end cta -->


    <!-- start events-section -->

    {{--<!-- end events-section -->--}}


    <!-- start inportant-people-section -->
    {{--<section class="inportant-people-section section-padding" id="people">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col col-xs-12">--}}
                    {{--<div class="section-title">--}}
                        {{--<div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>--}}
                        {{--<h2>Groomsmen &amp; Bridesmaid</h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div> <!-- end section-title -->--}}

            {{--<div class="row">--}}
                {{--<div class="col col-xs-12">--}}
                    {{--<div class="inportant-people-content">--}}
                        {{--<div class="tablist">--}}
                            {{--<ul class="nav">--}}
                                {{--<li class="active">--}}
                                    {{--<a href="#groomsmen"--}}
                                       {{--data-toggle="tab" aria-expanded="true">Groomsmen</a>--}}
                                {{--</li>--}}
                                {{--<li class="">--}}
                                    {{--<a href="#bridesmaid"--}}
                                       {{--data-toggle="tab" aria-expanded="false">Bridesmaid</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                        {{--<div class="tab-content">--}}
                            {{--<div class="tab-pane fade grid-wrapper active in" id="groomsmen">--}}
                                {{--<div class="grid">--}}
                                    {{--<div class="img-holder">--}}
                                        {{--<a href="img/img-1(3).jpg"--}}
                                           {{--class="popup-image">--}}
                                            {{--<img src="img/img-1(3).jpg"--}}
                                                 {{--alt="" class="img img-responsive">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="details">--}}
                                        {{--<h3>Jhon Michel</h3>--}}
                                        {{--<span>Best man</span>--}}
                                        {{--<ul class="social-links">--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-facebook"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-twitter"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-pinterest"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-vimeo"></i></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="grid">--}}
                                    {{--<div class="img-holder">--}}
                                        {{--<a href="img/img-2(3).jpg"--}}
                                           {{--class="popup-image">--}}
                                            {{--<img src="img/img-2(3).jpg"--}}
                                                 {{--alt="" class="img img-responsive">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="details">--}}
                                        {{--<h3>Chasmoos jhon</h3>--}}
                                        {{--<span>Best friden</span>--}}
                                        {{--<ul class="social-links">--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-facebook"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-twitter"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-pinterest"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-vimeo"></i></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="grid">--}}
                                    {{--<div class="img-holder">--}}
                                        {{--<a href="img/img-3(1).jpg"--}}
                                           {{--class="popup-image">--}}
                                            {{--<img src="img/img-3(1).jpg"--}}
                                                 {{--alt="" class="img img-responsive">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="details">--}}
                                        {{--<h3>Kaiste pate</h3>--}}
                                        {{--<span>Friend</span>--}}
                                        {{--<ul class="social-links">--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-facebook"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-twitter"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-pinterest"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-vimeo"></i></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="grid">--}}
                                    {{--<div class="img-holder">--}}
                                        {{--<a href="img/img-4.jpg"--}}
                                           {{--class="popup-image">--}}
                                            {{--<img src="img/img-4.jpg"--}}
                                                 {{--alt="" class="img img-responsive">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="details">--}}
                                        {{--<h3>Hatu Michel</h3>--}}
                                        {{--<span>Friend</span>--}}
                                        {{--<ul class="social-links">--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-facebook"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-twitter"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-pinterest"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-vimeo"></i></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="grid">--}}
                                    {{--<div class="img-holder">--}}
                                        {{--<a href="img/img-5(1).jpg"--}}
                                           {{--class="popup-image">--}}
                                            {{--<img src="img/img-5(1).jpg"--}}
                                                 {{--alt="" class="img img-responsive">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="details">--}}
                                        {{--<h3>Michel doin</h3>--}}
                                        {{--<span>Friend</span>--}}
                                        {{--<ul class="social-links">--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-facebook"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-twitter"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-pinterest"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-vimeo"></i></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="grid">--}}
                                    {{--<div class="img-holder">--}}
                                        {{--<a href="img/img-6.jpg"--}}
                                           {{--class="popup-image">--}}
                                            {{--<img src="img/img-6.jpg"--}}
                                                 {{--alt="" class="img img-responsive">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="details">--}}
                                        {{--<h3>Topper jone</h3>--}}
                                        {{--<span>Friend</span>--}}
                                        {{--<ul class="social-links">--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-facebook"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-twitter"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-pinterest"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-vimeo"></i></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="tab-pane fade grid-wrapper" id="bridesmaid">--}}
                                {{--<div class="grid">--}}
                                    {{--<div class="img-holder">--}}
                                        {{--<a href="img/img-1(4).jpg"--}}
                                           {{--class="popup-image">--}}
                                            {{--<img src="img/img-1(4).jpg"--}}
                                                 {{--alt="" class="img img-responsive">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="details">--}}
                                        {{--<h3>Rachel Li</h3>--}}
                                        {{--<span>Made of honor</span>--}}
                                        {{--<ul class="social-links">--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-facebook"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-twitter"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-pinterest"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-vimeo"></i></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="grid">--}}
                                    {{--<div class="img-holder">--}}
                                        {{--<a href="img/img-2(4).jpg"--}}
                                           {{--class="popup-image">--}}
                                            {{--<img src="img/img-2(4).jpg"--}}
                                                 {{--alt="" class="img img-responsive">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="details">--}}
                                        {{--<h3>Male Vign</h3>--}}
                                        {{--<span>Best friend</span>--}}
                                        {{--<ul class="social-links">--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-facebook"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-twitter"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-pinterest"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-vimeo"></i></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="grid">--}}
                                    {{--<div class="img-holder">--}}
                                        {{--<a href="img/img-3(2).jpg"--}}
                                           {{--class="popup-image">--}}
                                            {{--<img src="img/img-3(2).jpg"--}}
                                                 {{--alt="" class="img img-responsive">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="details">--}}
                                        {{--<h3>Jonny Mich</h3>--}}
                                        {{--<span>Friend</span>--}}
                                        {{--<ul class="social-links">--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-facebook"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-twitter"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-pinterest"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-vimeo"></i></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="grid">--}}
                                    {{--<div class="img-holder">--}}
                                        {{--<a href="img/img-4(1).jpg"--}}
                                           {{--class="popup-image">--}}
                                            {{--<img src="img/img-4(1).jpg"--}}
                                                 {{--alt="" class="img img-responsive">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="details">--}}
                                        {{--<h3>Brodd Wid</h3>--}}
                                        {{--<span>Friend</span>--}}
                                        {{--<ul class="social-links">--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-facebook"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-twitter"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-pinterest"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-vimeo"></i></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="grid">--}}
                                    {{--<div class="img-holder">--}}
                                        {{--<a href="img/img-5(2).jpg"--}}
                                           {{--class="popup-image">--}}
                                            {{--<img src="img/img-5(2).jpg"--}}
                                                 {{--alt="" class="img img-responsive">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="details">--}}
                                        {{--<h3>Nokshal bedi</h3>--}}
                                        {{--<span>Friend</span>--}}
                                        {{--<ul class="social-links">--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-facebook"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-twitter"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-pinterest"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-vimeo"></i></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="grid">--}}
                                    {{--<div class="img-holder">--}}
                                        {{--<a href="img/img-6(1).jpg"--}}
                                           {{--class="popup-image">--}}
                                            {{--<img src="img/img-6(1).jpg"--}}
                                                 {{--alt="" class="img img-responsive">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="details">--}}
                                        {{--<h3>Holly Fie</h3>--}}
                                        {{--<span>Friend</span>--}}
                                        {{--<ul class="social-links">--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-facebook"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-twitter"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-pinterest"></i></a></li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><i--}}
                                                            {{--class="fa fa-vimeo"></i></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div> <!-- end row -->--}}
        {{--</div> <!-- end container -->--}}
    {{--</section>--}}
    <!-- end inportant-people-section -->


    <!-- start gallery-section -->
    <section class="gallery-section section-padding" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title">
                        <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                        <h2>Наша Галерея</h2>
                    </div>
                </div>
            </div> <!-- end section-title -->

            <div class="row">
                <div class="col col-xs-12 sortable-gallery">
                    <div class="gallery-filters">
                        <ul>
                            <li><a data-filter="*"
                                   href="#"
                                   class="current">All</a></li>
                            <li><a data-filter=".wedding"
                                   href="#">Wedding</a>
                            </li>
                            <li><a data-filter=".ceremony"
                                   href="#">Ceremony</a>
                            </li>
                            <li><a data-filter=".party"
                                   href="#">Party</a>
                            </li>
                        </ul>
                    </div>

                    <div class="gallery-container gallery-fancybox masonry-gallery">
                        <div class="grid wedding">
                            <a href="img/img-1(5).jpg" class="fancybox"
                               data-fancybox-group="gall-1">
                                <img src="img/img-1(5).jpg" alt=""
                                     class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid wedding ceremony">
                            <a href="img/img-2(5).jpg" class="fancybox"
                               data-fancybox-group="gall-1">
                                <img src="img/img-2(5).jpg" alt=""
                                     class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid ceremony eudcation">
                            <a href="img/img-3(3).jpg" class="fancybox"
                               data-fancybox-group="gall-1">
                                <img src="img/img-3(3).jpg" alt=""
                                     class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid wedding party">
                            <a href="img/img-4(2).jpg" class="fancybox"
                               data-fancybox-group="gall-1">
                                <img src="img/img-4(2).jpg" alt=""
                                     class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid ceremony" >
                            <a href="img/img-5(3).jpg" class="fancybox"
                               data-fancybox-group="gall-1">
                                <img src="img/img-5(3).jpg" alt=""
                                     class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid party" >
                            <a href="img/img-6(2).jpg" class="fancybox"
                               data-fancybox-group="gall-1">
                                <img src="img/img-6(2).jpg" alt=""
                                     class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid wedding">
                            <a href="img/img-7(1).jpg" class="fancybox"
                               data-fancybox-group="gall-1">
                                <img src="img/img-7(1).jpg" alt=""
                                     class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid ceremony">
                            <!--  <a href="images/gallery/img-8.jpg" class="fancybox" data-fancybox-group="gall-1">
                                 <img src="images/gallery/img-8.jpg" alt class="img img-responsive">
                             </a> -->
                            <a href="https://www.youtube.com/embed/XSGBVzeBUbk?autoplay=1" data-type="iframe"
                               class="video-play-btn">
                                <img src="img/img-8(1).jpg" alt=""
                                     class="img img-responsive">
                                <i class="fa fa-play"></i>
                            </a>

                        </div>
                        <div class="grid ceremony" style="position: absolute; left: 0%; top: 709px;">
                            <a href="img/img-9.jpg" class="fancybox"
                               data-fancybox-group="gall-1">
                                <img src="img/img-9.jpg" alt=""
                                     class="img img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end gallery-section -->


    <!-- start rsvp-section -->
    <section class="rsvp-section section-padding" id="reg"
             style="background-image: url(img/img-1.jpg);  background-size: cover; background-repeat: no-repeat">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title-white">
                        <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                        <h2>Присоединяйтесь к нашей вечеринке</h2>
                    </div>
                </div>
            </div> <!-- end section-title -->

            <div class="row content">
                <div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p>Пожалуйста, забронируйте до 16 ноября начало в 17:00.</p>
                    <form id="rsvp-form" class="form validate-rsvp-form row" method="post" novalidate="novalidate">
                        <div class="col col-sm-12">
                            <input type="text" name="name" class="form-control" placeholder="ФИО">
                        </div>
                        <div class="col col-sm-6">
                            <select class="form-control" name="guest">
                                <option disabled="" selected="">Вы придёте?</option>
                                <option>Да</option>
                                <option>Нет</option>
                            </select>
                        </div>
                        <div class="col col-sm-6">
                            <select class="form-control" name="events">
                                <option disabled="" selected="">Сколько вас будет?</option>
                                <option>1</option>
                                <option>2-3</option>
                                <option>3</option>
                                <option>4-5</option>
                            </select>
                        </div>
                        <div class="col col-sm-12 submit-btn">
                            <button type="submit" class="submit">Отправить</button>
                            <span id="loader"><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i></span>
                        </div>
                        <div class="col col-md-12 success-error-message">
                            <div id="success">Thank you</div>
                        </div>
                    </form>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end rsvp-section -->


    <!-- start getting-there-section -->
    <section class="getting-there-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title-white">
                        <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                        <h2>Попасть туда</h2>
                    </div>
                </div>
            </div> <!-- end section-title -->

            <div class="row content">
                <div class="col col-md-6">
                    <h3>Transportation</h3>
                    <p> industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                        also the leap into electronic typesetting, remaining essentially unchanged. It was popularised
                        in the 1960s</p>
                </div>
                <div class="col col-md-6">
                    <h3>Accommodations</h3>
                    <p> industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                        also the leap into electronic typesetting, remaining essentially unchanged. It was popularised
                        in the 1960s</p>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end getting-there-section -->


    <!-- start gift-registration-section -->
    <section class="gift-registration-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title">
                        <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                        <h2>Регистрация пожеланий</h2>
                    </div>
                </div>
            </div> <!-- end section-title -->

            <div class="row content">
                <div class="col col-lg-10 col-lg-offset-1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, cupiditate, repudiandae. A ab sit
                        laboriosam quis distinctio dignissimos, nemo cum sed hic, deleniti maiores rem iste labore
                        commodi perferendis cumque.repudiandae. A ab sit laboriosam quis distinctio dignissimos, nemo
                        cum sed hic.</p>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end gift-registration-section -->

@endsection
