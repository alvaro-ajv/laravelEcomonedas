<!DOCTYPE html>
<html lang="en">
  @section('titulo','Iniciar Sesión')
  @include('partials.head')
  <body class="signup-page sidebar-collapse">
    @include('partials.header')
    <div class="section section-signup header-filter page-header" filter-color="purple" style="background-image: url('img/bg7.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-signup">
            <form class="form" method="POST" action="{{ route('login') }}">
              @csrf
              <div class="card-header card-header-primary text-center">
                <h4>Iniciar Sesión</h4>

              </div>
              <p class="text-divider">Datos para ingresar</p>
              <div class="card-body">

                <div class="input-group {{ ($errors->has('email')) == true ? ' has-danger bmd-form-group' : '' }}">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">person</i>
                    </span>
                  </div>
                  <input type="email" class="form-control" name="email" placeholder="Usuario..." value="{{ old('email') }}">
                  @if ($errors->has('email'))
                    <span class="form-control-feedback">
                        <i class="material-icons">clear</i>
                    </span>
                  @endif

                </div>

                    <div class="text-danger" style="margin-left:45px">{{ $errors->first('email') }}</div>

                <div class="input-group {{ ($errors->has('password')) == true ? ' has-danger bmd-form-group' : '' }}">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" name="password" placeholder="Contraseña...">
                  @if ($errors->has('password'))
                    <span class="form-control-feedback">
                        <i class="material-icons">clear</i>
                    </span>
                  @endif

                </div>
                <div class="text-danger" style="margin-left:45px">{{ $errors->first('password') }}</div>

              <div class="card-footer justify-content-center">
                <button href="#" class="btn btn-link btn-primary btn-lg">Ingresar</button>


              </div>
              <div class="text-center">
                <a href="{{ route('index') }}" class="btn btn-link btn-primary btn-sm">Pagina Principal</a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    @include('partials.footer')
  </div>


  </body>
</html>
