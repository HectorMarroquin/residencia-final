<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css"  href="css/EstilosHome.csss">
        <title>Bienvenido</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,700" rel="stylesheet"> 
        <!-- Styles -->
         <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
         <link rel="stylesheet" href="css/welcome.css">
         <link  href="fonts/svgs">
        <script src="bootstrap/js/all.js"></script>

        <style>
          
          .carousel-inner > .carousel-item > img {
            object-fit: scale-down;
            height: 50vh;
            width: 100%;
          }
        </style>
            
    </head>
    <body>


    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <div class="container">
        <a href="index.html" class="navbar-brand">
          Sistema Para Pre-incubacion
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            @if (Route::has('login'))
          <ul class="navbar-nav ml-auto">
              @auth
              <li class="nav-item">
                  <a href="{{ url('/home') }}" class="nav-link btn" data-toggle="modal">Home</a>
                </li>
              @else
              <li class="nav-item">
                <a class="nav-link btn" data-toggle="modal" data-target="#login">Iniciar Sesion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn" data-toggle="modal" data-target="#register">Registrarse</a>
              </li>
              @endauth   
            </ul>
            @endif
        </div>
      </div>
    </nav>


    <header id="home-section">
      <div class="dark-overlay">
        <div class="home-inner">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 d-sm-block">
                 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block" src="img/Innovacion0.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="img/innovacion2.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block" src="img/innovacion3.jpg" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
              </div>
              <!-- SECOND COLUMN -->
              <div class="col-lg-4">
                  <div class="card text-center" style="background-color:#1a84b9;">
                      <div class="card-body">
                         <h2>Pre-Incubacion de Planes de Negocios.</h2>
                          <p>Nuestros objetivos.</p>
           
                          <div class="d-flex flex-row">
                            <div class="p-4 align-self-start">
                              <i class="fas fa-certificate"></i>
                            </div>
                            <div class="p-4 align-self-end">
                              Lorem ipsum dolor sit amet
                            </div>
                          </div>
            <!-- check -->
                          <div class="d-flex flex-row">
                            <div class="p-4 align-self-start">
                              <i class="fas fa-certificate"></i>
                            </div>
                            <div class="p-4 align-self-end">
                              Lorem ipsum dolor sit amet, 
                            </div>
                          </div>
            <!-- check -->
                          <div class="d-flex flex-row">
                            <div class="p-4 align-self-start">
                              <i class="fas fa-certificate"></i>
                            </div>
                            <div class="p-4 align-self-end">
                              Lorem ipsum dolor sit amet, 
                            </div>
                          </div>
                     </div>
                   </div>
                </div>
             </div>
          </div>
        </div>
      </div>
</header>


<div class="container">
           <!-- Modal de Inicio de sesion-->
    <div class="row">
       <!-- The Modal -->
        <div class="modal fade" id="login">
            <div class="modal-dialog">
                <div class="modal-content">
                     
                   <!-- Modal Header -->
                        <div class="modal-header input-group-text">
                          <h4 class="modal-title">Bienvenido</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body">
                          <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <form method="POST" action="{{ route('login') }}">
                                                {{ csrf_field() }}
                                                 <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input id="email" type="email" name="email" value="" required="required" class="form-control" placeholder="Escriba su Correo">
                                                  </div>

                                                   <div class="input-group mb-3">

                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                    </div>
                                                   <input type="password" class="form-control" placeholder="Escriba su Contraseña" name="pass" id="pass">
                                                  </div>
      
                                                <div class="form-group row">
                                                     <div class="col-12">
                                                        <div class="row justify-content-center"> 
                                                           <div class=" col-12 col-sm-9 col-md-6 custom-control custom-checkbox">
                                                              <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                                              <label class="custom-control-label" for="customCheck">Mantener Sesion Iniciada</label>
                                                           </div> 
                                                        </div>      
                                                     </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="row justify-content-center">
                                                            <div class="col-12 col-sm-9 col-md-6">
                                                                <button class="btn btn-primary btn-block" type="submit">Entrar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <!--<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>-->
                             <div class="col-12 text-center">
                                 <a class="text-center" href="">¿Olvidaste tu Contrasena?</a>
                        </div>
                        
                      </div> 
                       
                </div>
            </div>
        </div>
    </div>

    <div class="row">
      <!-- The Modal -->
        <div class="modal fade" id="register">
           <div class="modal-dialog">
              <div class="modal-content">
                 <!-- Modal Header -->
                 <div class="modal-header input-group-text">
                     <h4 class="modal-title">Registro</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                 </div>
                  
                      <!-- Modal body -->
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                                <div class="col">
                                    <form action="#">

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                            </div>
                                              <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
                                        </div>

                                         <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-plus"></i></span>
                                            </div>
                                              <input type="text" class="form-control" placeholder="Apellido Paterno" name="apellido1" id="apellido1">
                                        </div>

                                         <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-plus"></i></span>
                                            </div>
                                              <input type="text" class="form-control" placeholder="Apellido Materno" name="apellido2" id="apellido2">
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                                            </div>
                                              <input id="email" type="email" name="email" value="" required="required" class="form-control" placeholder="Escriba su Correo">
                                        </div>


                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            </div>
                                               <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                                        </div>

                                         <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            </div>
                                               <input type="password" class="form-control" placeholder="Password_Confirmation" name="nombre" id="nombre">
                                        </div>                                
                                                                         
                                    </form>
                                </div>
                            </div>
                         </div>
                        </div>             
                         <div class="modal-footer">
                             <div class="col-12 text-center">
                                 <a class="text-center" href="">¿Olvidaste tu Contrasena?</a>
                             </div>
                         </div>   
                   </div>
              </div>
          </div>
     </div>
</div>

    <!-- FOOTER -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 p-4">
            <!--Footer Bottom-->
            <p class="text-center">&copy; Copyright 2018 - Instituto Tecnológico de Tuxtla Gutierrez, Chiapas, México.  All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>

      <script src="bootstrap/js/jquery-3.2.1.slim.min.js"></script>
      <script src="bootstrap/js/popper.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
 