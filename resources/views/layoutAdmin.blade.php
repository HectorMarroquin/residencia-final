<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--BOOSTRAP CSS-->
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/EstilosAdministrador.css')}}">
	<!--FONT AWESOME-->
	<script src="{{asset('bootstrap/js/all.js')}}"></script>
	
</head>
<body>
	<!--INICIO DEL NAVBAR-->
<nav class="navbar navbar-dark navbar navbar-expand-sm sticky-top">
          <a class="btn btn-secondary" href="#" role="button" id="menu-toggle">
            <span class="navbar-toggler-icon"></span>
          </a>
            <div class="container"><a class="navbar-brand" href="{{ url('/') }}">Portal Administrador</a>
                
                  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#nav0" aria-controls="nav0" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                   </button>
                
           </div>
        
        <div class="d-flex justify-content-end">    
            <div class="collapse navbar-collapse" id="nav0">
                <ul class="nav navbar-top-links navbar-right">
                    @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                   @else
                    <li class="dropdown list-unstyled">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i>
                         </a>
                             <ul class="dropdown-menu dropdown-alerts">
                                
                                <li>
                                   <a href="#"><i class="fa fa-comment fa-fw"></i>New Comentario</a>
                                </li>
                                
                                <div class="dropdown-divider"></div>
                                            
                                <li>
                                   <a href="#"><i class="fa fa-envelope fa-fw"></i> Enviar Mensaje</a>
                                </li>

                                <div class="dropdown-divider"></div>
                                
                                <li>       
                                <a class="text-center" href="#"><strong>Ver Alertas</strong><i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>           
                    </li>

                    <li class="dropdown list-unstyled">

                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                {{ Auth::user()->name }} <span class="caret"></span>
                                <i class="fa fa-user fa-fw"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                 <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a></li>
                                 <li><a href="#"><i class="fas fa-cog"></i> Configuraciones</a></li>
                                 <div class="dropdown-divider"></div>
                                 <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                             <i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>

                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                </li>
                            </ul>
                     </li>
                     @endguest
                 </ul>
            </div>
        </div>
</nav>
<!--FIN DEL NAVBAR-->

<!--INICIO DEL SIDEBAR-->
<div id="wrapper" class="toggled">
    <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="{{ route('HomeAdmin') }}">
                        Inicio
                    </a>
                </li>

                <li class="active">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Asesores</a>

                        <ul class="collapse list-unstyled" id="pageSubmenu">
                        
                          <li><a href="{{ route('asesores.create')}}">Registrar Asesor</a></li>
                          <li><a href="{{ route('asesores.index') }}">Consultar Asesor</a></li>
                          <li><a href="{{ route('asignaciones.index')  }}">Asigar Asesor</a></li>

                        </ul>
                </li>
               
                        <li><a href="{{ route('emprendedores.index') }}">Consultar Emprendedores</a></li>
                        <li><a href="{{ route('historial.index') }}">Historial de Proyectos</a></li>
                        <li><a href="{{ route('actividades.index') }}">Actividades</a></li>
                        <li><a href="#">Chat</a></li>
                        <li><a href="#">Cerrar Sesion</a></li>
            </ul>
        </nav>
 <!--FIN DEL SIDEBAR-->      
        
        <div class="container-fluid fondo1">
             
           @yield('content')
        
        </div>
        
   

</div>

<script src="{{ asset('bootstrap/js/jquery-3.2.1.slim.min.js')}}"></script>
<script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/AdministradorFuncion.js') }}"></script>

</body>
</html> 