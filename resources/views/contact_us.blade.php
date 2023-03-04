@extends('frontend_layout')
@section('content')
{{-- <div class="container my-4">
	<h3 class="mb-3">Contact Us</h3>

	@if($errors->any())
	    @foreach($errors->all() as $error)
	        <p class="text-danger">{{$error}}</p>
	    @endforeach
	@endif

	@if(Session::has('message'))
	<p class="text-success">{{session('message')}}</p>
	@endif

	<form method="post" action="{{url('save-contactus')}}">
		@csrf
		<table class="table table-bordered">
			<tr>
				<th>Full Name<span class="text-danger"> *&nbsp;</span></th>
				<td><input type="text" name="full_name" class="form-control" /></td>
			</tr>
			<tr>
				<th>Email<span class="text-danger">*</span></th>
				<td><input type="email" name="email" class="form-control" /></td>
			</tr>
			<tr>
				<th>Subject<span class="text-danger">*</span></th>
				<td><input type="text" name="subject" class="form-control" /></td>
			</tr>
			<tr>
				<th>Message<span class="text-danger">*</span></th>
				<td><textarea name="msg" class="form-control" rows="8"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" class="btn btn-primary" /></td>
			</tr>
		</table>
	</form>
</div> --}}



 <!-- Breadcrumbs & Page title-->
 <section class="section-md text-center bg-image breadcrumbs-01">
    <div class="shell shell-fluid">
      <div class="range range-xs-center">
        <div class="cell-xs-12 cell-xl-11">
          <h2 class="text-white">Contacts</h2>
          <ul class="breadcrumbs-custom">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">Contacts</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-md bg-white text-center">
    <div class="shell">
      <div class="range range-50 range-md-center">
        <div class="cell-sm-8">
          <div class="contact-box">

            <h3>Get in Touch</h3>
            <p>We are available 24/7 by fax, e-mail or by phone. You can also use our quick contact form to ask a question about our services. We would be pleased to answer your questions.</p>

                @if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="text-danger">{{$error}}</p>
                @endforeach
                @endif

        @if(Session::has('message'))
        <p class="text-success">{{session('message')}}</p>
        @endif

            <form  method="post" action="{{url('save-contactus')}}">
                @csrf

              <div class="range range-sm-bottom spacing-20">

                <div class="cell-sm-12">
                  <div class="form-wrap">
                    <input class="form-input" id="contact-first-name" type="text" name="full_name" data-constraints="">
                    <label class="form-label" for="contact-first-name"><span class="text-danger"> *&nbsp;</span>Full Name</label>
                  </div>
                </div>
                <div class="cell-sm-6">
                  <div class="form-wrap">
                    <input class="form-input" id="contact-last-name" type="text" name="subject" data-constraints="">
                    <label class="form-label" for="contact-last-name"><span class="text-danger"> *&nbsp;</span>Subject</label>
                  </div>
                </div>
                <div class="cell-xs-12">
                  <div class="form-wrap">
                    <textarea class="form-input" id="contact-message" name="msg" data-constraints=""></textarea>
                    <label class="form-label" for="contact-message">
                        <span class="text-danger"> *&nbsp;</span>Your Message</label>
                  </div>
                </div>
                <div class="cell-sm-6">
                  <div class="form-wrap">
                    <input class="form-input" id="contact-email" type="email" name="email" data-constraints=" ">
                    <label class="form-label" for="contact-email"><span class="text-danger"> *&nbsp;</span>E-mail</label>
                  </div>
                </div>
                <div class="cell-sm-6">
                  <button class="button button-primary button-square button-block button-effect-ujarak" type="submit"><span>send message</span></button>
                </div>
              </div>
            </form>

          </div>
        </div>
        <div class="cell-sm-4">
          <aside class="contact-box-aside text-left">
            <div class="range range-50">
              <div class="cell-xs-6 cell-sm-12">
                <p class="aside-title"> get Social</p>
                <hr class="divider divider-left divider-custom">
                <ul class="list-inline">
                  <li><a class="icon icon-sm icon-gray-3 fa fa-instagram" href="#"></a></li>
                  <li><a class="icon icon-sm icon-gray-3 fa fa-facebook" href="#"></a></li>
                  <li><a class="icon icon-sm icon-gray-3 fa fa-twitter" href="#"></a></li>
                  <li><a class="icon icon-sm icon-gray-3 fa fa-youtube" href="#"></a></li>
                </ul>
              </div>
              <div class="cell-xs-6 cell-sm-12">
                <p class="aside-title"> Phone</p>
                <hr class="divider divider-left divider-custom">
                <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                  <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-phone icon-primary"></span></div>
                  <div class="unit__body"><a class="text-middle link link-gray-dark" href="tel:#">1-800-1234-567</a></div>
                </div>
              </div>
              <div class="cell-xs-6 cell-sm-12">
                <p class="aside-title"> Address</p>
                <hr class="divider divider-left divider-custom">
                <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                  <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-map-marker icon-primary"></span></div>
                  <div class="unit__body"><a class="text-middle link link-gray-dark" href="contacts.html">267 Park Avenue New York, NY 90210</a></div>
                </div>
              </div>
              <div class="cell-xs-6 cell-sm-12">
                <p class="aside-title"> opening hours</p>
                <hr class="divider divider-left divider-custom">
                <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                  <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-clock icon-primary"></span></div>
                  <div class="unit__body text-gray-darker">
                    <p>We work every day 9:00–23:00</p>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- Page Footer-->
  <footer class="page-footer text-left text-sm-left">
    <div class="shell-wide">
      <div class="footer-banner section-sm"><a class="banner" href="https://www.templatemonster.com/website-templates/monstroid2.html" target="_blank"><img src="images/monstroid_big.jpg" alt="" height="0"></a></div>
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
