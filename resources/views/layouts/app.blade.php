<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="DMRmejiar">
    <meta name="description" content="">

    <!-- Icon -->
    <link rel="icon" href="{!! asset('svg/bis_icon.svg') !!}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Biscommakers') }}@yield('title')</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">
  	<link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css">
  	<link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
  	<link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">

  </head>

  <body>

    <!-- main-nav-start -->
    <nav class="main-nav-outer" id="app-navbar">
  		<div class="container">
  			<ul class="main-nav">
  				<li><a href="project">Proyecto</a></li>
  				<li><a href="theory">Teoria</a></li>
  				<li><a href="forms">Formularios</a></li>
  				<li class="small-logo"><a href="{{ asset('/') }}"><img src="{{ asset('img/small-logo.png') }}" alt=""></a></li>
  				<li><a href="design">Diseño</a></li>
  				<li><a href="companyIdentity">Identidad</a></li>
  				<li><a href="budget">Presupuesto</a></li>
  			</ul>
  		</div>
  	</nav>
  	<!--main-nav-end-->

    <!-- Begin page content -->
    <main role="main">
      @yield('content')
    </main>
    <!-- End page content -->

    <!-- Begin page footer -->
    <footer class="footer">
  		<div class="container">
  			<div class="footer-logo"><a href=""><img src="img/footer-logo.png" alt=""></a></div>
  			<span class="copyright">&copy; Biscommakers. All Rights Reserved</span>
  			<div class="credits">
  				<!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Knight
          -->
  				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  			</div>
  		</div>
  	</footer>
    <!-- End page footer -->

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  	<script type="text/javascript" src="{{ asset('js/wow.js') }}"></script>
  	<script type="text/javascript" src="{{ asset('js/classie.js') }}"></script>
  	<script type="text/javascript" src="{{ asset('js/magnific-popup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-scrolltofixed.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.isotope.js') }}"></script>
    <script src="{{ asset('contactform/contactform.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function(e) {

      $('#app-navbar').scrollToFixed();
      $('.res-nav_click').click(function() {
        $('.main-nav').slideToggle();
        return false

      });

      $('.Portfolio-box').magnificPopup({
        delegate: 'a',
        type: 'image'
      });

    });
    </script>
    <script>
    wow = new WOW({
      animateClass: 'animated',
      offset: 100
    });
    wow.init();
    </script>
    <script type="text/javascript">
    $(window).load(function() {

      $('.main-nav li a, .servicelink').bind('click', function(event) {
        var $anchor = $(this);

        $('html, body').stop().animate({
          scrollTop: $($anchor.attr('href')).offset().top - 102
        }, 1500, 'easeInOutExpo');
        /*
        if you don't want to use the easing effects:
        $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
      }, 1000);
      */
      if ($(window).width() < 768) {
        $('.main-nav').hide();
      }
      event.preventDefault();
    });
  })
  </script>
    <script type="text/javascript">
    $(window).load(function() {


      var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;


      $container.isotope({
        // disable window resizing
        resizable: true,
        masonry: {
          columnWidth: colW
        }
      });

      $(window).smartresize(function() {
        // check if columns has changed
        var currentColumns = Math.floor(($body.width() - 30) / colW);
        if (currentColumns !== columns) {
          // set new column count
          columns = currentColumns;
          // apply width to container manually, then trigger relayout
          $container.width(columns * colW)
          .isotope('reLayout');
        }

      }).smartresize(); // trigger resize to set container width
      $('.portfolioFilter a').click(function() {
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({

          filter: selector,
        });
        return false;
      });

    });
    </script>

  </body>
</html>
