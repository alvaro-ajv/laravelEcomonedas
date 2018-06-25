<nav class="navbar navbar-inverse @yield('claseTransparente') fixed-top navbar-expand-lg bg-dark" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{route('index')}}">
           <i class="fas fa-leaf" style="font-size:30px"></i>  <b>Ecomonedas</b> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
        @guest
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">account_circle</i> Cuenta
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="{{route('publico.login')}}" class="dropdown-item">
                <i class="material-icons">person</i> Iniciar Sesión
              </a>
              <a href="{{route('registrar')}}" class="dropdown-item">
                <i class="material-icons">person_add</i> Registrarse
              </a>
            </div>
          </li>
            @else
              @if (auth()->user()->tipoUsuario->id == 1)
                <li class="dropdown nav-item">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <i class="material-icons">build</i> Mantenimientos
                  </a>
                  <div class="dropdown-menu dropdown-with-icons">
                    <a href="{{ route('admin.usuario')}}" class="dropdown-item">
                      <i class="material-icons">person</i> Usuarios
                    </a>
                    <a href="{{ route('admin.centros')}}" class="dropdown-item">
                      <i class="material-icons">home</i>Centros de Acopio
                    </a>
                    <a href="{{ route('admin.materiales')}}" class="dropdown-item">
                      <i class="material-icons">category</i>Materiales
                    </a>
                  </div>
                </li>


              @else
                <li class="dropdown nav-item">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <i class="material-icons">build</i> AAAAAaaa
                  </a>
                  <div class="dropdown-menu dropdown-with-icons">
                    <a href="{{ route('admin.usuario')}}" class="dropdown-item">
                      <i class="material-icons">person</i> Usuarios
                    </a>
                    <a href="{{ route('admin.centros')}}" class="dropdown-item">
                      <i class="material-icons">home</i>Centros de Acopio
                    </a>
                  </div>
                </li>
              @endif
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <i class="material-icons">account_circle</i> {{auth()->user()->nombre}} {{auth()->user()->apellidos}}
                </a>
                <div class="dropdown-menu dropdown-with-icons">
                  <a href="{{route('logout')}}" class="dropdown-item">
                    <i class="material-icons">exit_to_app</i> Cerrar Sesión
                  </a>
                  <a href="#" class="dropdown-item">
                    <i class="material-icons">person_add</i> Configuración
                  </a>
                </div>
              </li>

        @endguest
        </ul>
      </div>
    </div>
  </nav>
