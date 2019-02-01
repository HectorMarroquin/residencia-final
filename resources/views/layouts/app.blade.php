<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css')}}" rel="stylesheet" >
  
</head>
<body>
    <div id="app">

            <nav class="navbar navbar-expand navbar-dark bg-dark static-top navbar-laravel">

                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    
                    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
                        <i class="fas fa-bars"></i>
                    </button>

                     <ul class="navbar-nav mr-auto">

                    </ul>

                    <ul class="navbar-nav ml-auto ml-md-0">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesion') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                            </li>
                         @else

                          <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user mr-1"></i>{{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                          <i class="fas fa-sign-out-alt"></i>{{ __('Cerrar Sesion') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                            </li>
                         @endguest
                         
                        </ul>
                  </div>                
            </nav>
 
        <main class="">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/sb-admin.min.js') }}" ></script>
    <script src="{{ asset('js/Agregarcolumnas.js')}}">s</script>
    <script src="{{ asset('js/muestratipodepersonas.js')}}"></script>
    <script src="{{ asset('js/Agregarcolumnasempre.js')}}"></script>
    <script src="{{ asset('js/Agregarcolumnascompe.js')}}"></script>
    <script src="{{ asset('js/delete.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</body>
</html>
