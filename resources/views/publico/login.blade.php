<!DOCTYPE html>
<html lang="en">
  @include('partials.head')
  <body class="signup-page sidebar-collapse">
    @include('partials.header')
    <div class="section section-signup header-filter page-header" filter-color="purple" style="background-image: url('img/bg7.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-signup">
            <form class="form" method="" action="">
              <div class="card-header card-header-primary text-center">
                <h4>Iniciar Sesión</h4>

              </div>
              <p class="text-divider">Datos para ingresar</p>
              <div class="card-body">

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">person</i>
                    </span>
                  </div>
                  <input type="email" class="form-control" placeholder="Usuario...">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Contraseña...">
                </div>

              <div class="card-footer justify-content-center">
                <a href="#" class="btn btn-link btn-primary btn-lg">Ingresar</a>


              </div>
              <div class="text-center">
                <a href="{{ route('index') }}" class="btn btn-link btn-primary btn-md">Pagina Principal</a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    @include('partials.footer')
  </div>

    @include('partials.scripts')
  </body>
</html>
