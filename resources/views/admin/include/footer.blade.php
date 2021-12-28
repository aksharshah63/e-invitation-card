<script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- gauge js -->
  {{-- <script type="text/javascript" src="{{asset('js/gauge/gauge.min.js')}}"></script> --}}
  {{-- <script type="text/javascript" src="{{asset('js/gauge/gauge_demo.js')}}"></script> --}}
  <!-- bootstrap progress js -->
  <script src="{{asset('js/progressbar/bootstrap-progressbar.min.js')}}"></script>
  <script src="{{asset('js/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <!-- icheck -->
  <script src="{{asset('js/icheck/icheck.min.js')}}"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="{{asset('js/moment/moment.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/datepicker/daterangepicker.js')}}"></script>
  <!-- chart js -->
  <script src="{{asset('js/chartjs/chart.min.js')}}"></script>

  <script src="{{asset('js/custom.js')}}"></script>

  <!-- flot js -->
  <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
  <script type="text/javascript" src="{{asset('js/flot/jquery.flot.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/flot/jquery.flot.pie.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/flot/jquery.flot.orderBars.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/flot/jquery.flot.time.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/flot/date.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/flot/jquery.flot.spline.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/flot/jquery.flot.stack.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/flot/curvedLines.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/flot/jquery.flot.resize.js')}}"></script>
   <!-- worldmap -->
   <script type="text/javascript" src="{{asset('js/maps/jquery-jvectormap-2.0.3.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/maps/gdp-data.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/maps/jquery-jvectormap-world-mill-en.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/maps/jquery-jvectormap-us-aea-en.js')}}"></script>
   <!-- pace -->
   <script src="{{asset('js/pace/pace.min.js')}}"></script>
   <!-- skycons -->
  <script src="{{asset('js/skycons/skycons.min.js')}}"></script>
  <script src="{{asset('js/validator/validator.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
  <script src="{{asset('js/jquery.directional-hover.min.js')}}"></script>
  <script>
    NProgress.done();
  </script>
  <script>
jQuery('form').submit(function(e) {
      e.preventDefault();
      var submit = true;
      // evaluate the form using generic validaing
      if (!validator.checkAll(jQuery(this))) {
        submit = false;
      }

      if (submit)
        this.submit();
      return false;
    });

    $('.slider').slick({
  autoplay:true,
  autoplaySpeed:4000,
  arrows:false,
  prevArrow:'<button type="button" class="slick-prev"></button>',
  nextArrow:'<button type="button" class="slick-next"></button>',
  pauseOnHover: false,
    pauseOnFocus: false,
    cssEase: 'linear',
  slidesToShow:3,
  slidesToScroll:1,
  responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            adaptiveHeight: true,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
          },
        },
      ]
  });

  document.addEventListener("mousemove", parallax);
        function parallax(e){
            this.querySelectorAll('.layer').forEach(layer => {
                const speed = layer.getAttribute('data-speed')

                const x = (window.innerWidth - e.pageX*speed)/400
                const y = (window.innerHeight - e.pageY*speed)/400

                layer.style.transform = `translateX(${x}px) translateY(${y}px)`
            })
        }

        $(window).load(function() {
				$('.dh-container').directionalHover();
			});
  </script>
  