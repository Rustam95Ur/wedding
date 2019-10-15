@extends('web.layouts.app')
@section('content')
    <!-- start wedding-couple-section -->

    <style>
.modal-title{
    text-align: center;
    font-size: 35px;
}
.modal{
    margin-top: -200px; 
}
/* Slideshow container */
.slideshow-container {
  position: relative;
  background: #f1f1f1f1;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev {
  position: absolute;
  left: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}
</style>
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
                            <select class="form-control" name="count_people">
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

           
            <div class="slideshow-container">

                <div class="mySlides">
                  <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
                  <p class="author">- John Keats</p>
                </div>

                <div class="mySlides">
                  <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
                  <p class="author">- Ernest Hemingway</p>
                </div>

                <div class="mySlides">
                  <q>I have not failed. I've just found 10,000 ways that won't work.</q>
                  <p class="author">- Thomas A. Edison</p>
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>


            </div> <!-- end row -->
        </div> <!-- end container -->
        <br>
    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#form">
        Оставить пожелание
    </button>
    </section>

    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ваше пожелание</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Ваше имя">
          </div>
          <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" name="gifts" rows="3" placeholder="Ваше пожелание"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">закрыть</button>
        <button type="button" class="btn btn-primary">Отправить</button>
      </div>
    </div>
  </div>
</div>
    

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
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
@endsection
