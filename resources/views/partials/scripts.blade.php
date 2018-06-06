<!--   Core JS Files   -->
  <script src="{{ URL::to('js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ URL::to('js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ URL::to('js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
  <script src="{{ URL::to('js/plugins/moment.min.js') }}"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{ URL::to('js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ URL::to('js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ URL::to('js/material-kit.js?v=2.0.3') }}" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
