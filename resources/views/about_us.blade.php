@extends('frontend_layout')
@section('content')
<section class="section-md text-center bg-image breadcrumbs-01">
    <div class="shell shell-fluid">
      <div class="range range-xs-center">
        <div class="cell-xs-12 cell-xl-11">
          <h2 class="text-white">About Us</h2>
          <ul class="breadcrumbs-custom">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">About Us</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-md bg-secondary-4 text-center text-sm-left">
    <div class="shell">
      <div class="range range-50 range-md-justify range-sm-middle">
        <div class="cell-sm-6 wow fadeInUp" data-wow-delay=".1s">
          <div class="box-outline box-outline__mod-1">
            <figure><img src="{{ asset('home/images/12.jpg') }}" alt="" width="546" height="516"/>
            </figure>
          </div>
        </div>
        <div class="cell-sm-6 cell-md-5 wow fadeInUp" data-wow-delay=".2s">
          <h3>A Few Words About Us</h3>
          <p>Tired of your daily routine? Seeking for a place to stay and rest with your family? You are in the right place! Our spa resort and hotel provides luxury and historic accommodations for travelers. It combines modern style and amenities with traditional values.</p>
          <p>All rooms are equipped with air conditioners and LCD TVs. Free WI-FI service is available throughout the territory of the hotel. Our restaurant food and meals from world cuisines unite people connecting history and traditions. Experience our warm hospitality, high quality of service and exceptional comfort! Make a reservation for your dream vacation today!</p><a class="button button-primary button button-square button-effect-ujarak button-lg" href="#"><span>read more</span></a>
        </div>
      </div>
    </div>
  </section>
  <style>
    .thumbnail-classic {
  display: inline-block !important;
  vertical-align: top !important;
}

.cell-sm-3.cell-md-3 {
  display: inline-flex !important;
  flex-basis: 33.33% !important;
  margin: 5px !important;
  padding: 0 !important;
}
.thumbnail-classic{
    height: 250px !important;
}

  </style>
  <section class="section section-md">
    <div class="shell ">

        <h3 class="">Rooms & Suites</h3>
        <p>Royal Villas offers the finest accommodations with unique designs that provide both a luxurious and relaxing environment. Specially selected fabrics and finishes vary from room to room, offering guests a variety of beautiful and unique atmospheres to select from.</p>

        @foreach($roomType as $rtype)
       <h6 class="mt-5">Room Type: <i>{{ $rtype->title }}</i></h6>
       <hr>
        <div class="range range-30" data-lightgallery="group" style="display: flex; flex-wrap: wrap; ">
            @foreach($rtype->roomTypeImages as $index => $img)
            @if($index > 0)

            <div class="cell-sm-3 cell-md-3 col-md-3" style="flex-basis: 33.33%; padding: 5px;">
                <a class="thumbnail-classic" href="{{asset($img->img_src)}}" data-lightgallery="item">
                    <figure><img src="{{asset($img->img_src)}}" alt="{{asset($img->img_alt)}}" width="370" height="276" /></figure>
                    <div class="caption"><p class="caption-title">{{ $rtype->title }}</p><p class="caption-text">Each room has its own unique décor and arrangement.</p></div>
                </a>
            </div>
            @endif
            @endforeach

        </div>
        @endforeach
    </div>
</section>

  <section class="section section-md bg-secondary-3 text-center">
    <div class="shell">
      <h3>What People Say</h3>
      <div class="range range-50">
        <div class="cell-xs-12">
          <div class="box-outline box-outline-fullwidth box-outline__mod-1">
            <div class="quote-carousel-wrap">
              <!-- Slick Carousel-->
              <div class="slick-slider carousel-parent" data-arrows="false" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
              @foreach($testimonials as $index => $testi)

                <div class="item">
                  <div class="quote-center">
                    <div class="quote-center-title">
                      Perfect spa resort & services!</h4>
                    </div>
                    <p class="quote-center-body">
                      <q>{{$testi->testi_cont}}</q>
                    </p>
                    <div class="quote-center-cite">
                      <cite>{{ $testi->customer->full_name }} </cite>&nbsp;|<span>{{ $testi->customer->email }}</span>
                    </div>
                  </div>
                </div>
                @endforeach

            </div>
            <div class="slick-slider" id="child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="true" data-dots="false" data-swipe="true" data-center-mode="true" data-sm-center-mode="true" data-md-center-mode="true" data-lg-center-mode="true" data-center-padding="0.50" data-items="1" data-xs-items="1" data-sm-items="3" data-md-items="3" data-lg-items="3" data-slide-to-scroll="1">
                @foreach($testimonials as $index => $testi)
                <div class="item">

                    <figure> <img class="img-circle" src="{{asset('images/customers/'. $testi->customer->photo)}}" alt="" width="100" height="100"> </figure>
                </div>
                @endforeach
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section section-md bg-white">
    <div class="shell">
      <h3>Our Staff</h3>
      <hr>
      <div class="range range-xs-center range-75">
        @if($staff)
        @foreach($staff as $st)
        <div class="cell-sm-6 cell-md-4 wow fadeInUp" data-wow-delay=".1s">
          <div class="team-box box-outline">

            <div class="team-image-box"><img src="{{asset('images/staff/'.$st->photo)}}" alt="" width="295" height="282"/>
              <div class="team-image-caption">
                <ul class="list-inline">
                  <li><a class="icon-sm icon-white fa-instagram icon" href="#"></a></li>
                  <li><a class="icon-sm icon-white fa-facebook icon" href="#"></a></li>
                  <li><a class="icon-sm icon-white fa-twitter icon" href="#"></a></li>
                </ul>
              </div>
            </div>
            <div class="team-caption"><a class="link team-title" href="#">{{ $st->full_name }}</a><span>{{ $st->bio }}</span></div>
          </div>
        </div>
        @endforeach
        @endif


      </div>
    </div>
  </section>
  <!-- Page Footer-->
  <footer class="page-footer text-left text-sm-left">
    <div class="shell-wide">
      <div class="footer-banner section-sm"><a class="banner" href="https://www.templatemonster.com/website-templates/monstroid2.html" target="_blank"><img src="home/images/monstroid_big.jpg" alt="" height="0"></a></div>
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
                    <p class="rights"><span>&copy;&nbsp;</span><span>2019</span><span>&nbsp;</span><span class="copyright-year"></span>Royal Villas. All Rights Reserved. Design by <a href="https://www.templatemonster.com">TemplateMonster</a></p>
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
                    <input class="form-input" id="subscribe-email" type="email" name="email" data-constraints=" ">
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
@endsection


