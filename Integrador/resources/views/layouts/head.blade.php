<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/menu.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/ab9be42588.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  </head>
  <title>@yield('Titulo')</title>
  <body>
    <header>
      <nav class="navbar navbar-expand-md menu" style="background-color: #F58634;">

        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon navbar-toggler-icon"></span>
        </button>

        <div  class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto  ">
            <li class="nav-item">
              <a class="nav-link" href="/">Inicio <span class="sr-only"></span></a>
            </li>
              @guest
              <li class="nav-item">
                <a class="nav-link" href="/login">Ingresar</a>
              </li>
              @else
              <li class="nav-item">
                @if (Auth::User()->regresaTipoUsuario(Auth::User()->idTipoUsuario) == 'Super Usuario' ||
                  Auth::User()->regresaPermiso(Auth::User()->idPermiso) == 'Administrar sistema')
                    <a class="nav-link" href="{{route('edificios.index')}}">Edificios</a>
                @elseif(Auth::User()->regresaTipoUsuario(Auth::User()->idTipoUsuario) == 'Administrador' ||
                    Auth::User()->regresaPermiso(Auth::User()->idPermiso) == 'Administrar inmueble')
                    <a class="nav-link" href="{{route('Departamentos.index')}}" >Departamentos</a>
                @endif
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="/Usuarios">Usuarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" 
                  href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
              </li>
              @endguest
              <li class="nav-item">
                <a class="nav-link" href="/about-us">Acerca</a>
              </li>
          </ul>
      </nav>
    </header>
      @yield('Contenido')
    
  </body>
</html>
