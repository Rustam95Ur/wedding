@extends('web.layouts.app')
@section('content')
    <!-- start wedding-couple-section -->
    <section class="wedding-couple-section section-padding" id="couple">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="gb groom">
                        <div class="img-holder wow fadeInLeftSlow"
                             style="background-image: url(img/img-1.jpg);">
                            <img src="{{asset('img/img-1.jpg')}}" alt="">
                        </div>
                        <div class="details" style="height: 456px;">
                            <div class="details-inner">
                                <h3>The groom</h3>
                                <p>Hi I am suntina , dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only five centuries.</p>
                                <span class="signature">Suntina</span>
                                <ul class="social-links">
                                    <li>
                                        <a href="#"><i
                                                    class="fa fa-facebook"></i></a></li>
                                    <li>
                                        <a href="#"><i
                                                    class="fa fa-twitter"></i></a></li>
                                    <li>
                                        <a href="#"><i
                                                    class="fa fa-pinterest"></i></a></li>
                                    <li>
                                        <a href="#"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="gb bride">
                        <div class="details" style="height: 456px;">
                            <div class="details-inner">
                                <h3>The Bride</h3>
                                <p>Hi I am suntina , dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only five centuries.</p>
                                <span class="signature">Famico</span>
                                <ul class="social-links">
                                    <li>
                                        <a href="#"><i
                                                    class="fa fa-facebook"></i></a></li>
                                    <li>
                                        <a href="#"><i
                                                    class="fa fa-twitter"></i></a></li>
                                    <li>
                                        <a href="#"><i
                                                    class="fa fa-pinterest"></i></a></li>
                                    <li>
                                        <a href="#"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="img-holder wow fadeInRightSlow"
                             style="background-image: url(img/img-2.jpg);">
                            <img src="img/img-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end wedding-couple-section -->


    <!-- start count-down-section -->
    <section class="count-down-section section-padding parallax" data-bg-image="img/img-9.jpg" data-speed="7"
             style="background-image: url(img/img-9.jpg); background-position: 50% -164.571px; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col col-md-4">
                    <h2><span>We are waiting for.....</span> The adventure</h2>
                </div>
                <div class="col col-md-7 col-md-offset-1">
                    <div class="count-down-clock">
                        <div id="clock">
                            <div class="box">
                                <div>70</div>
                                <span>Days</span></div>
                            <div class="box">
                                <div>12</div>
                                <span>Hours</span></div>
                            <div class="box">
                                <div>16</div>
                                <span>Mins</span></div>
                            <div class="box">
                                <div>31</div>
                                <span>Secs</span></div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end count-down-section -->


    <!-- start story-section -->
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
    <!-- end story-section -->

    <!-- start cta -->
    <section class="cta section-padding parallax" data-bg-image="img/img-2.jpg" data-speed="7"
             style="background-image: url(img/img-1.jpg); background-position: 50% -477.616px; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2><span>We are going to...</span> Celebrate Our Love</h2>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end cta -->


    <!-- start events-section -->
    {{--<section class="events-section section-padding" id="events">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col col-xs-12">--}}
                    {{--<div class="section-title">--}}
                        {{--<div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>--}}
                        {{--<h2>Wedding events</h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div> <!-- end section-title -->--}}

            {{--<div class="row">--}}
                {{--<div class="col col-lg-10 col-lg-offset-1">--}}
                    {{--<div class="event">--}}
                        {{--<div class="img-holder">--}}
                            {{--<img src="img/img-1(2).jpg" alt=""--}}
                                 {{--class="img img-responsive">--}}
                        {{--</div>--}}
                        {{--<div class="details">--}}
                            {{--<h3>The reception</h3>--}}
                            {{--<ul>--}}
                                {{--<li><i class="fa fa-map-marker"></i> 32 big bro road, Chanpai, London.</li>--}}
                                {{--<li><i class="fa fa-clock-o"></i> Nov 25 2017, 9AM - 5PM</li>--}}
                            {{--</ul>--}}
                            {{--<p>when an unknown printer took a galley of type and scrambled it to make a type specimen--}}
                                {{--book. It has survived not only five centuries, but also the leap into electronic--}}
                                {{--typesetting, remaining essentially unchanged. </p>--}}
                            {{--<a class="see-location-btn popup-gmaps"--}}
                               {{--href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25211.21212385712!2d144.95275648773628!3d-37.82748510398018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2zTWVsYm91cm5lIFZJQyAzMDA0LCDgpoXgprjgp43gpp_gp43gprDgp4fgprLgpr_gpq_gprzgpr4!5e0!3m2!1sbn!2sbd!4v1503742051881">--}}
                                {{--See location <i class="fa fa-angle-right"></i>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="event">--}}
                        {{--<div class="img-holder">--}}
                            {{--<img src="img/img-2(2).jpg" alt=""--}}
                                 {{--class="img img-responsive">--}}
                        {{--</div>--}}
                        {{--<div class="details">--}}
                            {{--<h3>Wedding party</h3>--}}
                            {{--<ul>--}}
                                {{--<li><i class="fa fa-map-marker"></i> 32 big bro road, Chanpai, London.</li>--}}
                                {{--<li><i class="fa fa-clock-o"></i> Nov 25 2017, 9AM - 5PM</li>--}}
                            {{--</ul>--}}
                            {{--<p>when an unknown printer took a galley of type and scrambled it to make a type specimen--}}
                                {{--book. It has survived not only five centuries, but also the leap into electronic--}}
                                {{--typesetting, remaining essentially unchanged. </p>--}}
                            {{--<a class="see-location-btn popup-gmaps"--}}
                               {{--href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.0160484383277!2d144.99053291585201!3d-37.81309307975254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642ef89a7e023%3A0xb1353055e38c1ab8!2sNew+York+Tomato+Cafe!5e0!3m2!1sbn!2sbd!4v1503743893919">--}}
                                {{--See location <i class="fa fa-angle-right"></i>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div> <!-- end row -->--}}
        {{--</div> <!-- end container -->--}}
    {{--</section>--}}
    <!-- end events-section -->


    <!-- start inportant-people-section -->
    <section class="inportant-people-section section-padding" id="people">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title">
                        <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                        <h2>Groomsmen &amp; Bridesmaid</h2>
                    </div>
                </div>
            </div> <!-- end section-title -->

            <div class="row">
                <div class="col col-xs-12">
                    <div class="inportant-people-content">
                        <div class="tablist">
                            <ul class="nav">
                                <li class="active">
                                    <a href="#groomsmen"
                                       data-toggle="tab" aria-expanded="true">Groomsmen</a>
                                </li>
                                <li class="">
                                    <a href="#bridesmaid"
                                       data-toggle="tab" aria-expanded="false">Bridesmaid</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade grid-wrapper active in" id="groomsmen">
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="img/img-1(3).jpg"
                                           class="popup-image">
                                            <img src="img/img-1(3).jpg"
                                                 alt="" class="img img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h3>Jhon Michel</h3>
                                        <span>Best man</span>
                                        <ul class="social-links">
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-facebook"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-twitter"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-pinterest"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="img/img-2(3).jpg"
                                           class="popup-image">
                                            <img src="img/img-2(3).jpg"
                                                 alt="" class="img img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h3>Chasmoos jhon</h3>
                                        <span>Best friden</span>
                                        <ul class="social-links">
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-facebook"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-twitter"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-pinterest"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="img/img-3(1).jpg"
                                           class="popup-image">
                                            <img src="img/img-3(1).jpg"
                                                 alt="" class="img img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h3>Kaiste pate</h3>
                                        <span>Friend</span>
                                        <ul class="social-links">
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-facebook"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-twitter"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-pinterest"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="img/img-4.jpg"
                                           class="popup-image">
                                            <img src="img/img-4.jpg"
                                                 alt="" class="img img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h3>Hatu Michel</h3>
                                        <span>Friend</span>
                                        <ul class="social-links">
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-facebook"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-twitter"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-pinterest"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="img/img-5(1).jpg"
                                           class="popup-image">
                                            <img src="img/img-5(1).jpg"
                                                 alt="" class="img img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h3>Michel doin</h3>
                                        <span>Friend</span>
                                        <ul class="social-links">
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-facebook"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-twitter"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-pinterest"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="img/img-6.jpg"
                                           class="popup-image">
                                            <img src="img/img-6.jpg"
                                                 alt="" class="img img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h3>Topper jone</h3>
                                        <span>Friend</span>
                                        <ul class="social-links">
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-facebook"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-twitter"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-pinterest"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade grid-wrapper" id="bridesmaid">
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="img/img-1(4).jpg"
                                           class="popup-image">
                                            <img src="img/img-1(4).jpg"
                                                 alt="" class="img img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h3>Rachel Li</h3>
                                        <span>Made of honor</span>
                                        <ul class="social-links">
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-facebook"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-twitter"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-pinterest"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="img/img-2(4).jpg"
                                           class="popup-image">
                                            <img src="img/img-2(4).jpg"
                                                 alt="" class="img img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h3>Male Vign</h3>
                                        <span>Best friend</span>
                                        <ul class="social-links">
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-facebook"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-twitter"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-pinterest"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="img/img-3(2).jpg"
                                           class="popup-image">
                                            <img src="img/img-3(2).jpg"
                                                 alt="" class="img img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h3>Jonny Mich</h3>
                                        <span>Friend</span>
                                        <ul class="social-links">
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-facebook"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-twitter"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-pinterest"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="img/img-4(1).jpg"
                                           class="popup-image">
                                            <img src="img/img-4(1).jpg"
                                                 alt="" class="img img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h3>Brodd Wid</h3>
                                        <span>Friend</span>
                                        <ul class="social-links">
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-facebook"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-twitter"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-pinterest"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="img/img-5(2).jpg"
                                           class="popup-image">
                                            <img src="img/img-5(2).jpg"
                                                 alt="" class="img img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h3>Nokshal bedi</h3>
                                        <span>Friend</span>
                                        <ul class="social-links">
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-facebook"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-twitter"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-pinterest"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="img/img-6(1).jpg"
                                           class="popup-image">
                                            <img src="img/img-6(1).jpg"
                                                 alt="" class="img img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h3>Holly Fie</h3>
                                        <span>Friend</span>
                                        <ul class="social-links">
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-facebook"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-twitter"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-pinterest"></i></a></li>
                                            <li>
                                                <a href="#"><i
                                                            class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end inportant-people-section -->


    <!-- start gallery-section -->
    <section class="gallery-section section-padding" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title">
                        <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                        <h2>Our gallery</h2>
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

                    <div class="gallery-container gallery-fancybox masonry-gallery"
                         style="position: relative; height: 1046.23px;">
                        <div class="grid wedding" style="position: absolute; left: 0%; top: 0px;">
                            <a href="img/img-1(5).jpg" class="fancybox"
                               data-fancybox-group="gall-1">
                                <img src="img/img-1(5).jpg" alt=""
                                     class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid wedding ceremony" style="position: absolute; left: 33.2468%; top: 0px;">
                            <a href="img/img-2(5).jpg" class="fancybox"
                               data-fancybox-group="gall-1">
                                <img src="img/img-2(5).jpg" alt=""
                                     class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid ceremony eudcation" style="position: absolute; left: 66.5801%; top: 0px;">
                            <a href="img/img-3(3).jpg" class="fancybox"
                               data-fancybox-group="gall-1">
                                <img src="img/img-3(3).jpg" alt=""
                                     class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid wedding party" style="position: absolute; left: 0%; top: 261px;">
                            <a href="img/img-4(2).jpg" class="fancybox"
                               data-fancybox-group="gall-1">
                                <img src="img/img-4(2).jpg" alt=""
                                     class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid ceremony" style="position: absolute; left: 33.2468%; top: 292px;">
                            <a href="img/img-5(3).jpg" class="fancybox"
                               data-fancybox-group="gall-1">
                                <img src="img/img-5(3).jpg" alt=""
                                     class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid party" style="position: absolute; left: 66.5801%; top: 372px;">
                            <a href="img/img-6(2).jpg" class="fancybox"
                               data-fancybox-group="gall-1">
                                <img src="img/img-6(2).jpg" alt=""
                                     class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid wedding" style="position: absolute; left: 33.2468%; top: 628px;">
                            <a href="img/img-7(1).jpg" class="fancybox"
                               data-fancybox-group="gall-1">
                                <img src="img/img-7(1).jpg" alt=""
                                     class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid ceremony" style="position: absolute; left: 66.5801%; top: 634px;">
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
    <section class="rsvp-section section-padding"
             style="background-image: url(img/img-1.jpg);  background-size: cover; background-repeat: no-repeat">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title-white">
                        <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                        <h2>Join our party</h2>
                    </div>
                </div>
            </div> <!-- end section-title -->

            <div class="row content">
                <div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p>Please reserve before December 16th, 2017.</p>
                    <form id="rsvp-form" class="form validate-rsvp-form row" method="post" novalidate="novalidate">
                        <div class="col col-sm-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name*">
                        </div>
                        <div class="col col-sm-6">
                            <input type="email" name="email" class="form-control" placeholder="Your Email*">
                        </div>
                        <div class="col col-sm-6">
                            <select class="form-control" name="guest">
                                <option disabled="" selected="">Number Of Guest*</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="col col-sm-6">
                            <select class="form-control" name="events">
                                <option disabled="" selected="">I Am Attending*</option>
                                <option>Al events</option>
                                <option>Wedding ceremony</option>
                                <option>Reception party</option>
                            </select>
                        </div>
                        <div class="col col-sm-12">
                            <textarea class="form-control" name="notes" placeholder="Your Message*"></textarea>
                        </div>
                        <div class="col col-sm-12 submit-btn">
                            <button type="submit" class="submit">Send Invitation</button>
                            <span id="loader"><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i></span>
                        </div>
                        <div class="col col-md-12 success-error-message">
                            <div id="success">Thank you</div>
                            <div id="error"> Error occurred while sending email. Please try again later.</div>
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
                        <h2>Getting there</h2>
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
                        <h2>Gift registration</h2>
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
