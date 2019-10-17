@extends('web.layouts.app')
@section('content')
    <!-- start wedding-couple-section -->


    <section class="story-section section-padding" id="story">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title">
                        <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                        <h2>love story video</h2>
                    </div>
                </div>
            </div> <!-- end section-title -->

            <div class="row content">
                <div class="col col-lg-8 col-lg-offset-2">
                    <div class="img-holder video-holder">
                        <img src="img/Basher.ph-02865.JPG" alt=""
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
    <section class="count-down-section section-padding parallax" data-bg-image="img/Basher.ph-02769.JPG" data-speed="7"
             style="background-image: url(img/Basher.ph-02769.JPG); background-position: 40%; background-size: cover;">
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
                        <h2>Үйлену той</h2>
                    </div>
                </div>
            </div> <!-- end section-title -->

            <div class="row">
                <div class="col col-lg-10 col-lg-offset-1">
                    <div class="event">
                        <div class="img-holder">
                            <img src="https://s7d2.scene7.com/is/image/ritzcarlton/RC_Astana_125455?$XlargeViewport100pct$"
                                 alt=""
                                 class="img img-responsive">
                        </div>
                        <div class="details">
                            <h3>Свадьба</h3>
                            <ul>
                                <li><i class="fa fa-map-marker"></i> Dostyk Street 16, Нур-Султан.</li>
                                <li><i class="fa fa-clock-o"></i> 16 ноября начало в 17:00</li>
                            </ul>
                            <p>Приглашаем вас на нашу свадьбу </p>
                            <a class="see-location-btn popup-gmaps"
                               href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504.0848862940297!2d71.43006911564372!3d51.12534224638651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4245841eb37c0d19%3A0x13c453dce1e537af!2sThe%20Ritz-Carlton%2C%20Astana!5e0!3m2!1sru!2skz!4v1571160291204!5m2!1sru!2skz">
                                Посмотреть на карте <i class="fa fa-angle-right"></i>
                            </a>


                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end story-section -->

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
                <div class="col col-xs-12 sortable-gallery ">
                    <div class="owl-carousel owl-loaded owl-theme">
                        @foreach($images as $image)
                            <div class="grid wedding ">
                                <a href="{{'/storage/'.$image->image}}" class="fancybox"
                                   data-fancybox-group="gall-1">
                                    <img src="{{'/storage/'.$image->image}}" alt=""
                                         class="img img-responsive">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end gallery-section -->


    <!-- start rsvp-section -->
    <section class="rsvp-section section-padding" id="reg"
             style="background-image: url(img/Basher.ph-03635.JPG);  background-size: cover; background-repeat: no-repeat">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title-white">
                        <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                        <h2>Сізді шын жүректен күтеміз</h2>
                    </div>
                </div>

            </div> <!-- end section-title -->
            @if(Session::has('save-reserve') == false)
                <div class="row content">
                    <div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <p>Пожалуйста, ответьте на вопросы.</p>
                        <form action="{{route('reserve-add')}}" class="form validate-rsvp-form row" method="post">
                            @csrf
                            <div class="col col-sm-12">
                                <input type="text" name="full_name" class="form-control" placeholder="ФИО" required>
                            </div>
                            <div class="col col-sm-6">
                                <select class="form-control" name="agreement" required>
                                    <option disabled="" selected="">Вы придёте?</option>
                                    <option value="1">Да</option>
                                    <option value="0">Нет</option>
                                </select>
                            </div>
                            <div class="col col-sm-6">
                                <select class="form-control" name="count_people" required>
                                    <option disabled="" selected="">Сколько вас будет?</option>
                                    <option value="1">1</option>
                                    <option value="2-3">2-3</option>
                                    <option value="3">3</option>
                                    <option value="4-5">4-5</option>
                                </select>
                            </div>
                            <div class="col col-sm-12 submit-btn">
                                <input type="submit" class="submit" value="Отправить">
                            </div>
                        </form>
                    </div>
                </div> <!-- end row -->
            @else
                <div class="col col-xs-12">
                    <div class="section-title-white">
                        <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                        <h2>Рахмет</h2>
                    </div>
                </div>
            @endif
        </div> <!-- end container -->
    </section>
    <!-- end rsvp-section -->


    <!-- start getting-there-section -->

    <!-- end getting-there-section -->


    <!-- start gift-registration-section -->
    <section class="gift-registration-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title">
                        <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                        <h2>Оставьте своё пожелание на память</h2>
                    </div>
                </div>
            </div> <!-- end section-title -->


            <div class="slideshow-container">
                @if(isset($comments))
                    @foreach($comments as $comment)
                        <div class="mySlides">
                            <q>{{$comment->text}}</q>
                            <p class="author">- {{$comment->name}}</p>
                        </div>
                    @endforeach
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>
                @endif

            </div> <!-- end row -->
        </div> <!-- end container -->
        <br>
        @if(Session::has('save-comment') == false)
            <button class="modal-submit-btn" data-toggle="modal" data-target="#form">
                Оставить пожелание
            </button>
        @endif
    </section>
    <section class="gallery-section section-padding" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title">
                        <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                        <h2>Instagram</h2>
                        <p align="center " style="margin-top: 10px">#Оркен❤Асел<br>#Orken❤Asel</p>

                    </div>
                </div>
            </div> <!-- end section-title -->
            <div class="row">
                <div class="col col-xs-12 sortable-gallery">
                    <div class="gallery-container gallery-fancybox masonry-gallery">
                        @foreach($instagramImages as $image)
                            <div class="grid wedding">
                                <a href="{{$image}}" class="fancybox"
                                   data-fancybox-group="gall-1">
                                    <img src="{{$image}}" alt=""
                                         class="img img-responsive">
                                </a>
                                <div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end gallery-section -->


    <!-- end gift-registration-section -->
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
@endsection
