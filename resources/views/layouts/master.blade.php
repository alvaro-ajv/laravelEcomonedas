<!DOCTYPE html>
<html lang="en">

@include('partials.head')
<body class="sidebar-collapse">
  @include('partials.header')
  @yield('index')
  <div class="main main-raised">
    <div class="container">
      @yield('contenido')
    </div>
  </div>
  @include('partials.footer')



  @include('partials.scripts')
</body>
</html>
