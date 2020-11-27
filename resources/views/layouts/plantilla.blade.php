<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- <title>{{ config('app.name', 'HandBag Wolf') }}</title>-->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>HandBag Wolf</title>
    <link rel="shortcut icon" href="{{ asset('images/bolsa/logo.ico') }}">.
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{ asset('layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
    <div id="app">
      <div class="wrapper row1">
        <header id="header" class="hoc clear">
          <!-- ################################################################################################ -->
          <div id="logo" class="fl_left">
            <h1><a href="index.php">HandBag Wolf</a></h1>
            <p>Bolsos de Calidad</p>
          </div>
          <div id="quickinfo" class="fl_right">
            <ul class="nospace inline">
              <li><strong>Celular:</strong><br>
                +52 (477) 233 2968</li>
              <li><strong>Telefono:</strong><br>
                +52 (477) 233 2968</li>

            </ul>


          </div>
          <!-- ################################################################################################ -->
        </header>
        <nav id="mainav" class="hoc clear">
          <!-- ################################################################################################ -->
          <ul class="clear">
            <li class="active"><a href="home">Home</a></li>
            <li><a class="drop" href="#">Catalogo</a>
              <ul>
                <li><a class="nav-link" href="{{ route('users.index') }}">Usuarios</a></li>
                <li><a class="nav-link" href="{{ route('roles.index') }}">Roles</a></li>
                <li> <a class="nav-link" href="{{ route('productos.index') }}">Productos</a></li>
                <li><a class="nav-link" href="{{ route('materiales.index') }}">Materiales</a></li>
                <li><a class="nav-link" href="{{ route('empleados.index') }}">Empleados</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('marca.index') }}">Marca</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('unidad.index') }}">Unidad</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link" href="{{ route('proveedor.index') }}">Proveedor</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('almacen.index') }}">Almacen</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('compra.index') }}">Compras</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('detalleventa.index') }}">Detalle venta</a>
                </li>
              </ul>
            </li>
            <li><a class="drop" href="#">Empleados</a>
              <ul>
                <li><a href="#">Level 2</a></li>
                <li><a class="drop" href="#">Level 2 + Drop</a>
                  <ul>
                    <li><a href="#">Level 3</a></li>
                    <li><a href="#">Level 3</a></li>
                    <li><a href="#">Level 3</a></li>
                  </ul>
                </li>
                <li><a href="#">Level 2</a></li>
              </ul>
            </li>
            <li><a href="#">Link Text</a></li>
            <li><a href="#">Link Text</a></li>
            <li><a href="{{ route('register') }}">Registrar</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
            @if (Route::has('login'))
                      <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                          @auth
                              <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                          @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Loginxxx</a>

                              @if (Route::has('register'))
                                  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                              @endif
                          @endif
                      </div>
                  @endif
          </ul>
          <!-- ################################################################################################ -->
        </nav>
      </div>
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
           <div class="container">
            <header id="header" class="hoc clear">
              <!-- ################################################################################################
              <div id="logo" class="fl_left">
                <h1><a href="home">HandBag Wolf</a></h1>
              </div>
               ################################################################################################
            </header>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>-->
        <div class="wrapper row3">
          <main class="py-4">
            <br>
            <br>
              @yield('content')
          </main>
        </div>

    </div>
<div class="wrapper row4">

  <footer id="footer" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="heading">Est aenean fermentum</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Ante volutpat iaculis</h6>
      <ul class="nospace linklist">
        <li><a href="#">Ipsum eu urna tristique</a></li>
        <li><a href="#">Tempor nunc aliquet</a></li>
        <li><a href="#">Ipsum sit amet mollis</a></li>
        <li><a href="#">Ullamcorper odio velit</a></li>
        <li><a href="#">Vulputate magna at rhoncus</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Nisl commodo ut nam</h6>
      <ul class="nospace linklist">
        <li><a href="#">Turpis diam eget quam in</a></li>
        <li><a href="#">Blandit sed nulla id tempor</a></li>
        <li><a href="#">Duis interdum ligula at</a></li>
        <li><a href="#">Lectus venenatis blandit</a></li>
        <li><a href="#">Nulla molestie tellus</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Aliquam risus dolor at</h6>
      <p class="nospace btmspace-15">Ultricies neque sollicitudin sit amet phasellus vel est quam vivamus finibus.</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{{ asset('layout/scripts/jquery.min.js')}}"></script>
<script src="{{ asset('layout/scripts/jquery.backtotop.js')}}"></script>
<script src="{{ asset('layout/scripts/jquery.mobilemenu.js')}}"></script>
</body>
</html>
