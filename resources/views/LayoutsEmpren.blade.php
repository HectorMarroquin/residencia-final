<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/RegistroEmprendedor.css')}}">
    <script src="{{asset('bootstrap/js/all.js')}}"></script>
    

</head>
<body>
        <nav class="navbar navbar-dark navbar navbar-expand-sm sticky-top barrainicio1">
           
             <a class="btn btn-outline-primary" href="#" role="button" id="menu-toggle""><span class="navbar-toggler-icon"></span></a>
            
              <div class="container"><a class="navbar-brand" href="{{ url('/') }}">Portal Emprendedor</a>
                
                    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#nav0" aria-controls="nav0" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                
                </div>

            <div class="d-flex justify-content-end">
           
            <div class="collapse navbar-collapse" id="nav0">
                <ul class="nav navbar-top-links navbar-right">

                 <li class="dropdown list-unstyled">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                     <i class="fa fa-comment fa-fw"></i>New Comentario
                                </a>
                            </li>
                                <div class="dropdown-divider"></div>
                            <li>
                                <a href="#">
                                     <i class="fa fa-envelope fa-fw"></i> Enviar Mensaje 
                                </a>
                            </li>
                                <div class="dropdown-divider"></div>
                            <li>
                                <a class="text-center" href="#"> <strong>Ver Alertas</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                       
                    </li>

                    <li class="dropdown list-unstyled">

                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                               <span class="caret">  {{ Auth::user()->name }} </span>
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
                    <a href="{{ route('Empren-home') }}">
                        Inicio
                    </a>
                </li>

                <li>
                    <a href="{{ route('Registro.create') }}">
                        Registro del Emprendedor
                    </a>
                </li>

                <li class="active">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Registro del Proyecto</a>

                        <ul class="collapse list-unstyled" id="pageSubmenu">
                        
                          <li> <a href="{{ route('AlProyecto.create') }}">Alta del Proyecto</a> </li>
                        
                        </ul>
                </li>
               
                        <li><a href="{{ route('Lista.index') }}">Entregas</a></li>
                        <li><a href="{{ route('Estado.index') }}">Estatus de los Proyectos</a></li>
                        <li><a href="#">Chat</a></li>
                        <li><a href="#">Cerrar Session</a></li>
            </ul>
        </nav>
     
        
        <div class="container-fluid">
             
           @yield('contenido')
        
        </div>
        
   

    </div>

<script src="{{ asset('bootstrap/js/jquery-3.2.1.slim.min.js')}}"></script>
<script src="{{ asset('bootstrap/js/popper.min.js')}}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/Emprendedorbarraopciones.js')}}"></script>
<script src="{{ asset('js/Agregarcolumnas.js')}}"></script>
<script src="{{ asset('js/muestratipodepersonas.js')}}"></script>
<script src="{{ asset('js/Agregarcolumnasempre.js')}}"></script>
<script src="{{ asset('js/Agregarcolumnascompe.js')}}"></script>

</body>
</html> 
