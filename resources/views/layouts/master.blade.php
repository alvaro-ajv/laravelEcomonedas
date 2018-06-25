<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body class="sidebar-collapse">
  @include('partials.header')
  @yield('index')
  <div class="main main-raised" style="@yield('margen')">
    <div class="container">
      @yield('contenido')
    </div>
  </div>
  @include('partials.footer')



  <script src="{{ asset('js/plugins/bootstrap-colorpicker.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/plugins/bootstrap-colorpicker-plus.js') }}" type="text/javascript"></script>

<script type="text/javascript">
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


<script src="{{ asset('js/sweetalert.min.js') }}"></script>
@include('sweet::alert')

<script src="{{asset('js/custom-file-input.js')}}"></script>

<script src="{{asset('js/multislider.js')}}"></script>
<script>
$('#basicSlider').multislider({
			continuous: true,
			duration: 2000
		});
		$('#mixedSlider').multislider({
			duration: 750,
			interval: 3000
		});
</script>


</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</html>
