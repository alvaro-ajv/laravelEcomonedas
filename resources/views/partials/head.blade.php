<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  Ecomonedas | @yield('titulo')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="{{ URL::to('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons') }}" />
  <link href="{{asset('css/fontawesome-all.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('css/material-kit.css?v=2.0.3') }}" rel="stylesheet" />


  <link href="{{ asset('css/bootstrap-colorpicker.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/bootstrap-colorpicker-plus.css') }}" rel="stylesheet" />

  <link href="{{asset('css/sweetalert.css')}}" rel="stylesheet" />

    <link href="{{ asset('css/multislider.css') }}" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="{{URL::to('css/component.css')}}" />
  <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
  <style type="text/css" media="screen">

    .cuadro {

    color:#fff; padding: 5px;
    height: 60px;
    width: 60px;
    margin-top: 5px;
    margin-right: auto;
    margin-bottom: 5px;
    margin-left: auto;
    }

    



  </style>



  @include('partials.scripts')


</head>
