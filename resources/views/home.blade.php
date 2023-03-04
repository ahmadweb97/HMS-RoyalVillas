@extends('frontend_layout')
@section('content')


		@foreach($service as $ser)

		@endforeach


    <!-- LightBox css -->
<link rel="stylesheet" type="text/css" href="{{asset('vendor/lightbox2-2.11.3/dist/css/lightbox.min.css')}}" />

<!-- LightBox Js -->
<script type="text/javascript" src="{{asset('vendor/lightbox2-2.11.3/dist/js/lightbox.min.js')}}"></script>
<style type="text/css">
	.hide{
		display: none;
	}
</style>


<!-- icon list--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">

  <body>

    <!-- Page-->
    <div class="text-center page">



      <section class="section">
        <div class="shell-wide">
          <div class="range range-30 range-xs-center">
              <div class="cell-lg-8 cell-xl-9">
                  <!-- Classic slider-->
                  <section class="section">
                      <!-- Swiper -->
                      <div class="swiper-container swiper-slider swiper-style-2" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="slide" data-direction="vertical">
                          <div class="swiper-wrapper">
                      @foreach($banners as $index => $banner)

                    <div data-slide-bg="{{asset('images/banners/'.$banner->banner_src)}}" class="swiper-slide @if($index==0) active @endif">

                    <div class="swiper-slide-caption">
                      <div class="shell text-sm-left">
                        <h1 data-caption-animate="slideInDown" data-caption-delay="100">Your Ideal Retreat</h1>
                        <div class="slider-subtitle-group">
                          <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400"></div>
                          <h4 data-caption-animate="slideInLeft" data-caption-delay="100">Enjoy the world of relaxation</h4>
                          <h3 data-caption-animate="slideInLeft" data-caption-delay="100">and tranquility!</h3>
                        </div>
                        <a class="button button-effect-ujarak button-lg button-white-outline button-square" href="{{url('page/about-us')}}" data-caption-animate="slideInLeft" data-caption-delay="1150"><span>learn more</span></a>
                      </div>
                    </div>

                  </div>
                  @endforeach
                </div>

            <div class="swiper-pagination"></div>
        </div>
    </section>
</div>



            <div class="cell-lg-4 cell-xl-3 reveal-lg-flex">
              <div class="hotel-booking-form">
                <h3>Book a Room</h3>
                @if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="text-danger">{{$error}}</p>
                @endforeach
             @endif

            @if (Session::has('message'))
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Success! </strong> {{ Session('message') }}
            </div>
             @endif
                <!-- RD Mailform-->
                @if(Session::has('customerlogin'))
                <form method="post" enctype="multipart/form-data" action="{{url('booking/save-booking')}}" >
                    @csrf
                  <div class="range range-sm-bottom spacing-20">
                    <div class="cell-lg-12 cell-md-4">
                      <p class="text-uppercase">Your Name</p>
                      <div class="form-wrap">

                        <select class="form-input" name="customer_id" id="contact-first-name">
                            <option>--- Select Customer ---</option>
                            @foreach($data as $customer)
                                <option value="{{$customer->id}}">{{$customer->full_name}}</option>
                            @endforeach

                        </select>
                        <label class="form-label" for="contact-first-name">Your Full Name</label>
                      </div>
                    </div>
                    <div class="cell-lg-12 cell-md-4 cell-sm-6">
                      <p class="text-uppercase">Arrival</p>
                      <div class="form-wrap">
                        <label class="form-label form-label-icon" for="date-in"><span class="icon icon-primary fa-calendar"></span><span>Check-in Date</span></label>
                        <input class="form-input" id="date-in" data-time-picker="date" type="text" name="checkin_date" data-constraints="">
                      </div>
                    </div>
                    <div class="cell-lg-12 cell-md-4 cell-sm-6">
                      <p class="text-uppercase">Departure</p>
                      <div class="form-wrap">
                        <label class="form-label form-label-icon" for="date-out"><span class="icon icon-primary fa-calendar"></span><span>Check-out Date</span></label>
                        <input class="form-input" id="date-out" data-time-picker="date" type="text" name="checkout_date" data-constraints="">
                      </div>
                    </div>

                    <div class="cell-lg-12 cell-md-4">
                        <p class="text-uppercase">Your Room</p>
                        <div class="form-wrap">
                       {{--    <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints=""> --}}

                    <select class="form-input" name="room_id">
                        <option>--- Select Room ---</option>
                                @foreach($rooms as $room)
                                    <option value="{{$room->id}}">{{$room->title}}</option>
                                @endforeach
                        </select>
                          <label class="form-label" for="contact-first-name">Your Room</label>
                        </div>
                      </div>

                    <div class="cell-lg-6 cell-md-4 cell-xs-6">
                      <p class="text-uppercase">Adults</p>
                      <div class="form-wrap form-wrap-validation">
                      <input type="number" min="1" max="5" name="total_adults" class="form-input">
                      </div>
                    </div>
                    <div class="cell-lg-6 cell-md-4 cell-xs-6">
                      <p class="text-uppercase">Children</p>
                      <div class="form-wrap form-wrap-validation">
                        <!--Select 2-->
                        <input type="number" min="0" max="5" name="total_children" class="form-input">

                      </div>
                    </div>
                    <div class="cell-lg-12 cell-md-4">
                        <input type="hidden" name="roomprice" class="room-price" value="" />
                      <button class="button button-primary button-square button-block button-effect-ujarak" type="submit"><span>check availability</span></button>
                    </div>
                  </div>
                </form>
                @else
                    <p>Please <a href="{{ url('login') }}">log in</a> to book a room.</p>
                @endif
              </div>
            </div>
          </div>
        </div>
      </section>





      <!-- About us-->
      <section class="section section-md bg-white text-center text-sm-left">
        <div class="shell-wide">
          <div class="range range-50 range-xs-center overflow-hidden">
            <div class="cell-sm-10 cell-md-8 cell-lg-7 wow fadeInUp" data-wow-delay=".1s">
              <div class="post-video post-video-border">
                <div class="post-video__image"><img src="{{ asset('home/images/15.jpg') }}" alt="" width="1020" height="525"/>
                </div>
                <div class="post-video__body"></div>
              </div>
            </div>
            <div class="cell-sm-10 cell-md-8 cell-lg-5 reveal-flex wow fadeInUp" data-wow-delay=".3s">
              <div class="bg-secondary section-wrap-content-var-1">
                <div class="section-wrap-content-var-1-inner">
                  <h2>About Us</h2>
                  <p class="text-light">Committed to everyone seeking energy and excitement, we offer endless possibilities to unwind and reenergize.</p>
                  <div class="group text-dark">
                    <dl class="list-desc">
                      <dt>Weekdays:</dt>
                      <dd><span>8:00–20:00</span></dd>
                    </dl>
                    <dl class="list-desc">
                      <dt>Weekends:</dt>
                      <dd><span>9:00–18:00</span></dd>
                    </dl>
                  </div><a class="button button-effect-ujarak button-lg button-secondary-outline button-square" href="{{url('page/about-us')}}"><span>Explore</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Indoor Pool-->
      <section class="section section-md bg-secondary-4 text-center text-sm-left">
        <div class="shell">
          <div class="range range-50 range-md-justify range-sm-middle">
            <div class="cell-sm-6 cell-md-5">
              <h3>Our Services</h3>

              <p>
                {{ $ser->small_desc }}
            </p>
            <p>
                {{ $ser->detail_desc }}
            </p>
            <a class="button button-primary button button-square button-effect-ujarak button-lg" href="{{url('services')}}"><span>read more</span></a>
            </div>
            <div class="cell-sm-6">
              <div class="box-outline box-outline__mod-1">
                <figure><img src="{{asset('images/services/'.$ser->photo)}}" alt="" width="546" height="516"/>
                </figure>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- Portfolio-->
      <style>
        .thumbnail-classic img{
            height: 350px !important;
        }
      </style>
      <section class="section section-md bg-white text-center px-3 text-sm-left">
        <div class="shell-wide mx-3" id="gallery">
          <div class="range range-10 range-middle">
            <div class="cell-sm-6 text-md-left">
              <h3>Our Gallery</h3>
            </div>

       {{--      <div class="cell-sm-6 text-sm-right">
                <a class="heading-link link-gray-darker" href="{{ asset('images/room_types/') }}" data-lightgallery="item">See All Photos</a>
            </div> --}}

            </div>

          <hr>
          <div class="isotope-wrap">

              <!-- Isotope Content-->
              <div class="row isotope" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group" >
                @foreach($roomType as $rtype)
              <div class="col-xs-12 col-sm-6 col-md-3 grid-sizer d-grid "></div>
                  {{--     <h5 class="card-header">{{$rtype->title}}</h5> --}}
                      <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1" data-wow-delay=".1s">
                          @foreach($rtype->roomTypeImages as $index => $img)
                          <div class="" style="left: 150px;">
                              <a href="{{asset($img->img_src)}}" class="portfolio-item thumbnail-classic" data-lightgallery="item">
                                  @if($index > 0)
                                  <img class="img-fluid hide" src="{{asset($img->img_src)}}"  />
                                  <figure></figure>
                                  <div class="caption fs-1"><span class=""></span><span>{{ $rtype->title }}</span></div></a>
                                  @else
                                  <img class="img-fluid" src="{{asset($img->img_src)}}"  />
                                  <figure></figure>
                                  <div class="caption fs-1"><span class=""></span><span>{{ $rtype->title }}</span></div></a>
                                  @endif
                              </a>
                            </div>
                          @endforeach
                      </div>

                      @endforeach
                    </div>
          </div>
        </div>
      </section>
      <!-- Blog-->

      <style>

.post-box-horizontal .post-box-minimal-title, .post-box-horizontal .post-box-minimal-meta-bottom{
    padding-right: 250px !important;
    cursor: pointer;
}

.post-box-minimal-title{
    padding-inline: 150px !important;
    cursor: pointer !important;

}

 .post-box-horizontal .post-box-minimal-meta-bottom:hover{
   color: white !important;
   cursor: pointer !important;


}
.post-box-horizontal .post-box:hover{
   color: white !important;
   cursor: pointer !important;


}

.post-box-minimal-meta-bottom p{
    padding-right: 150px !important;
    cursor: pointer !important;
    width: 50%;
   white-space: nowrap;


}
      </style>
      <section class="section section-sm bg-white text-center text-sm-left">
        <div class="shell-wide">
          <h3>Testimonials</h3>
          <hr>
          <div class="container-fluid mt-3 d-block w-100">
            <div class="owl-carousel owl-carousel-stagePadding"  data-items="1" data-sm-items="2" data-xl-items="3" data-dots="false" data-nav="true" data-stage-padding="0" data-lg-stage-padding="100" data-xl-stage-padding="0" data-loop="true" data-margin="0" data-mouse-drag="false" data-nav-class="[&quot;owl-button-prev fl-budicons-free-left161&quot;,&quot;owl-button-next  fl-budicons-free-right163&quot;] ">
              @foreach($testimonials as $index => $testi)
                <div class="col-12 col-md-6 col-lg-4 post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".1s">

                  <div class="post-box-minimal-caption @if($index==0) active @endif">
                    <div class="post-box-minimal-caption-inner">
                      <h6 class="post-box p-4 fs-4">{{$testi->testi_cont}}</h6>
                      <div class="post-box-minimal-meta-bottom">
                        <p class="fs-5 ">{{ $testi->customer->full_name }}</p>

                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>

	<!-- testimonial Section End -->
        </div>
      </section>
      <!-- Page Footer-->
      <footer class="page-footer text-left text-sm-left">
        <div class="shell-wide">
          <div class="footer-banner section-sm"></div>
          <div class="page-footer-minimal">
            <div class="shell-wide">
              <div class="range range-50">
                <div class="cell-sm-6 cell-md-3 cell-lg-4 wow fadeInUp" data-wow-delay=".1s">
                  <div class="page-footer-minimal-inner">
                    <h4>Opening Hours</h4>
                    <ul class="list-unstyled">
                      <li>
                        <div class="group-xs">
                          <div>
                            <dl class="list-desc">
                              <dt>Weekdays: </dt>
                              <dd class="text-gray-darker"><span>8:00–20:00</span></dd>
                            </dl>
                          </div>
                          <div>
                            <dl class="list-desc">
                              <dt>Weekends: </dt>
                              <dd class="text-gray-darker"><span>9:00–18:00</span></dd>
                            </dl>
                          </div>
                        </div>
                      </li>
                      <li>
                        <p class="rights"><span>&copy;&nbsp;</span><span>2019</span><span>&nbsp;</span><span class="copyright-year"></span>Royal Villas. All Rights Reserved. Design by </p>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-5 cell-lg-4 wow fadeInUp" data-wow-delay=".2s">
                  <div class="page-footer-minimal-inner">
                    <h4>Address</h4>
                    <ul class="list-unstyled">
                      <li>
                        <dl class="list-desc">
                          <dt><span class="icon icon-sm mdi mdi-map-marker"></span></dt>
                          <dd><a class="link link-gray-darker" href="#">6036 Richmond hwy., Alexandria, VA, 2230</a></dd>
                        </dl>
                      </li>
                      <li>
                        <dl class="list-desc">
                          <dt><span class="icon icon-sm mdi mdi-phone"></span></dt>
                          <dd class="text-gray-darker">Call Us: <a class="link link-gray-darker" href="tel:#">+1 (409) 987–5874</a>
                          </dd>
                        </dl>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="cell-sm-8 cell-md-4 wow fadeInUp" data-wow-delay=".3s">
                  <div class="page-footer-minimal-inner-subscribe">
                    <h4>Join Our Newsletter</h4>
                    <!-- RD Mailform-->
                    <form class="rd-mailform rd-mailform-inline form-center" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                      <div class="form-wrap">
                        <input class="form-input" id="subscribe-email" type="email" name="email" data-constraints="">
                        <label class="form-label" for="subscribe-email">Enter your e-mail</label>
                      </div>
                      <button class="button button-primary-2 button-effect-ujarak button-square" type="submit"><span>Subscribe</span></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- PANEL-->
    <!-- END PANEL-->
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- PhotoSwipe Gallery-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__cent"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript-->
   {{--  <script src="{{ asset('home/js/core.min.js') }}"></script>
    <script src="{{ asset('home/js/script.js') }}"></script> --}}
    <!--Coded by Drel-->
  </body>
</html>











@endsection
