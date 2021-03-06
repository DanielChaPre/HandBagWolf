<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('images/bolsa/logo.ico') }}">.
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="divNotificaciones"></div>
                <script>
                    var urlNotificaciones = "{{route('notificaciones')}}";
                </script>
                    {{HTML::script('js/notificaciones.js')}}
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('productos.index') }}">Productos</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('materiales.index') }}">Materiales</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('empleados.index') }}">Empleados</a>
                            </li>
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
                                    <a class="nav-link" href="{{ route('detalleventa.index') }}">Detalle venta</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('almacen.index') }}">Almacen</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('ventas.index') }}">Venta</a>
                            </li>
                        @else
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('productos.index') }}">Productos</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('materiales.index') }}">Materiales</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('empleados.index') }}">Empleados</a>
                            </li>
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
                                    <a class="nav-link" href="{{ route('detalleventa.index') }}">Detalle venta</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('almacen.index') }}">Almacen</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('ventas.index') }}">Venta</a>
                            </li>
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
        </nav>

        <main class="p-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
