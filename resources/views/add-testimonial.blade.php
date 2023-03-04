@extends('frontend_layout')
@section('content')

<main>
    <!-- Breadcrumbs & Page title-->
    <section class="section-md text-center bg-image breadcrumbs-01">
      <div class="shell shell-fluid">
        <div class="range range-xs-center">
          <div class="cell-xs-12 cell-xl-11">
            <h2 class="text-white">Testimonials</h2>
            <ul class="breadcrumbs-custom">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li class="active">Testimonial</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

 <!-- Base typography-->
 <section class="section-sm bg-white text-sm-left">
    <div class="shell">
      <div class="range">

        <div class="container my-4">
            <div class="card">
                <div class="card-header">
            <h3 class="mb-3 p-3">Add Testimonial</h3></div>
            <div class="fs-3 mb-3 p-3">
            @if(Session::has('message'))
            <p class="text-success">{{session('message')}}</p>
            @endif
            @if(Session::has('error'))
            <p class="text-danger">{{session('error')}}</p>
            @endif
        </div>
            <form method="post" action="{{url('customer/save-testimonial')}}">
                @csrf
                <div class="card-body shadow-lg">
                <table class="table table-secondary table-striped">
                    <tr>
                        <th class="fs-4">Testimonial<span class="text-danger">*</span></th>
                        <td><textarea name="testi_cont" class="form-control" rows="8" placeholder="Write your thought.."></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" class="btn btn-warning float-end" /></td>
                    </tr>
                </table>
            </div>
            </form>
        </div>
    </div>
      </div>
    </div>
  </section>


  <!-- Icon List-->
  <section class="section-sm bg-white text-sm-left">
    <div class="shell">
      <h3>Know that we have...</h3>
      <div class="range range-50">
        <div class="cell-xs-6 cell-md-4">
          <article class="box-minimal">
            <div class="box-minimal-icon-big hotel-icon-03"></div>
            <h4 class="box-minimal-title">Best Service</h4>
            <div class="box-minimal-divider"></div>
            <div class="box-minimal-text">Our mission is to attract and retain customers by providing Best in Class solutions and fostering a profitable, disciplined culture of safety, service, and trust.</div>
          </article>
        </div>
        <div class="cell-xs-6 cell-md-4">
          <article class="box-minimal">
            <div class="box-minimal-icon-big hotel-icon-12"></div>
            <h4 class="box-minimal-title">Reputation</h4>
            <div class="box-minimal-divider"></div>
            <div class="box-minimal-text">We have established a strong presence in the industry. Our award-winning services earn a reputation for quality and excellence that few can rival.</div>
          </article>
        </div>
        <div class="cell-xs-6 cell-md-4">
          <article class="box-minimal">
            <div class="box-minimal-icon-big hotel-icon-26"></div>
            <h4 class="box-minimal-title">Safety & Security</h4>
            <div class="box-minimal-divider"></div>
            <div class="box-minimal-text">Safety for our employees, customers and the community we work with will always remain our primary focus in all the policies, procedures and programs.</div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- Centered Image-->
  <section class="section-sm bg-white text-sm-left">
    <div class="shell">
      <div class="range">
        <div class="cell-md-8">
          <h3>Centered Image</h3>
          <figure class="figure-default"><img src="{{ asset('home/images/14.jpg') }}" alt="" width="770" height="485"/>
            <figcaption>
              <p>Affordable spa & hospitality services</p>
            </figcaption>
          </figure>
          <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Left Image-->
  <section class="section-sm bg-white text-sm-left">
    <div class="shell">
      <div class="range">
        <div class="cell-md-8">
          <h3>Left Image</h3>
          <div class="range range-30">
            <div class="cell-sm-6"><img src="{{ asset('home/images/08.jpg') }}" alt="" width="350" height="220"/>
            </div>
            <div class="cell-sm-6">
              <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Right Image-->
  <section class="section-sm bg-white text-sm-left">
    <div class="shell">
      <div class="range">
        <div class="cell-md-8">
          <h3>Right Image</h3>
          <div class="range range-30 range-sm-reverse">
            <div class="cell-sm-6"><img src="{{ asset('home/images/10.jpg') }}" alt="" width="350" height="220"/>
            </div>
            <div class="cell-sm-6">
              <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Page Footer-->
  <footer class="page-footer text-left text-sm-left">
    <div class="shell-wide">

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
</main>
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


