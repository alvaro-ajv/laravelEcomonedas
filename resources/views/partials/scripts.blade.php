<!--   Core JS Files   -->
  <script src="{{ asset('js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/plugins/moment.min.js') }}"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{ asset('js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('js/material-kit.js?v=2.0.3') }}" type="text/javascript"></script>
    <!--  Plugin for the DataTable-->
  <script src="{{ asset('js/plugins/jquery.dataTables.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/plugins/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>


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

    $(document).ready(function() {
      $('#dataTables').DataTable();
    } );


    $(function(){
        var demo1 = $('#demo1');
        demo1.colorpickerplus();
        demo1.on('changeColor', function(e,color){
      if(color==null)
      $(this).val('transparent').css('background-color', '#fff');//tranparent
      else
          $(this).val(color).css('background-color', color);
        });
      });


    </script>
