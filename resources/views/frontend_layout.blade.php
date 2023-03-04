<!DOCTYPE html>
<html class="wide wow-animation" >
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="{{asset('bs5/bootstrap.min.css')}}" rel="stylesheet" />
	<script type="text/javascript" src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('bs5/bootstrap.bundle.min.js')}}"></script>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('home/images/favicon.ico') }}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700">
    <link rel="stylesheet" href="{{ asset('home/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>
{{-- 	<nav class="navbar navbar-expand-lg navbar-light bg-warning fw-bold">
	  <div class="container">
	    <a class="navbar-brand text-success" href="{{url('/')}}">Hotel Management System</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav ms-auto">
	        <a class="nav-link border-end border-success" aria-current="page" href="#services">Services</a>
	        <a class="nav-link border-end border-success"  href="#gallery">Gallery</a>
	        <a class="nav-link border-end border-success"  href="{{url('page/about-us')}}">About Us</a>
	        <a class="nav-link border-end border-success"  href="{{url('page/contact-us')}}">Contact Us</a>
	        @if(Session::has('customerlogin'))
	        <a class="nav-link border-end border-success"  href="{{url('customer/add-testimonial')}}">Add Testimonial</a>
	        <a class="nav-link border-end border-success"  href="{{url('logout')}}">Logout</a>
	        <a class="nav-link btn btn-sm btn-danger" href="{{url('booking')}}">Booking</a>
	        @else
	        <a class="nav-link border-end border-success"  href="{{url('login')}}">Login</a>
	        <a class="nav-link"  href="{{url('register')}}">Register</a>
	        <a class="nav-link btn btn-sm btn-outline-danger" href="{{url('booking')}}">Booking</a>
	        @endif
	      </div>
	    </div>
	  </div>
	</nav> --}}

      <!-- Page preloader-->
      <div class="page-loader">
        <div>
          <div class="page-loader-body">
            <div class="loader">
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="window"></div>
              <div class="door"></div>
              <div class="hotel-sign"><span>H</span><span>O</span><span>T</span><span>E</span><span>L</span></div>
            </div>
          </div>
        </div>
      </div>
   <!-- Page Header-->
   <header class="page-header" style="padding-bottom: 24px">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
      <nav class="rd-navbar rd-navbar-default-with-top-panel" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-lg-device-layout="rd-navbar-fullwidth" data-md-stick-up-offset="90px" data-lg-stick-up-offset="150px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
        <div class="rd-navbar-top-panel rd-navbar-collapse">
          <div class="rd-navbar-top-panel-inner">
            <div class="left-side">
              <div class="group"><span class="text-italic">Follow Us:</span>
                <ul class="list-inline">
                  <li><a class="icon icon-sm icon-secondary-5 fa fa-instagram" href="#"></a></li>
                  <li><a class="icon icon-sm icon-secondary-5 fa fa-facebook" href="#"></a></li>
                  <li><a class="icon icon-sm icon-secondary-5 fa fa-twitter" href="#"></a></li>
                </ul>
              </div>
            </div>
            <div class="center-side">
              <!-- RD Navbar Brand-->
              <div class="rd-navbar-brand fullwidth-brand"><a class="brand-name" href="{{ url('/') }}"><img src="{{ asset('home/images/logo-default-314x48.png') }}" alt="" width="314" height="48"/></a></div>
            </div>

            <div class="right-side">
              <!-- Contact Info-->
              <div class="contact-info">
                <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                  <div class="unit__left">
                   </div>


                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="rd-navbar-inner">
          <!-- RD Navbar Panel-->
          <div class="rd-navbar-panel">
            <!-- RD Navbar Toggle-->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
            <!-- RD Navbar collapse toggle-->
            <button class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></button>
            <!-- RD Navbar Brand-->
            <div class="rd-navbar-brand mobile-brand"><a class="brand-name" href="index.html"><img src="{{ asset('home/images/logo-default-314x48.png') }}" alt="" width="314" height="48"/></a></div>
          </div>
          <div class="rd-navbar-aside-right">
            <div class="rd-navbar-nav-wrap">
              <div class="rd-navbar-nav-scroll-holder">
                <ul class="rd-navbar-nav">
                  <li class="active"><a href="{{url('/')}}">Home</a>
                  </li>
                  <li><a href="{{url('page/about-us')}}">About Us</a>
                  </li>
                  <li><a href="{{url('page/contact-us')}}">Contact Us</a>
                  </li>
                </li>
                <li><a href="{{url('services')}}">Services</a>
                </li>
                <li><a href="#gallery">Gallery</a>
                </li>
                @if(Session::has('customerlogin'))
                <li><a href="{{url('customer/add-testimonial')}}">Testimonials</a>
                  <li><a href="{{url('logout')}}">Logout</a>
                  </li>
                  @else
                    <li><a href="{{url('login')}}">Login</a>
                    </li>
                  <li><a href="{{ url('register') }}">Register</a>
                  </li>
                  @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>


		<main>
			@yield('content')
		</main>
	</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Javascript-->
    <script src="{{ asset('home/js/core.min.js') }}"></script>
    <script src="{{ asset('home/js/script.js') }}"></script>
    <!--Coded by Drel-->
</html>
