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
          label{
              color:  #18191a;

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
                            <div class=" align-self-end">
                                Desarrollar modelos de negocio y planes de negocio
                            </div>
                          </div>
            <!-- check -->
                          <div class="d-flex flex-row">
                            <div class="p-4 align-self-start">
                              <i class="fas fa-certificate"></i>
                            </div>
                            <div class=" align-self-end">
                                Mejorar el índice de rentabilidad y crecimiento
                            </div>
                          </div>
            <!-- check -->
                          <div class="d-flex flex-row">
                            <div class="p-4 align-self-start">
                              <i class="fas fa-certificate"></i>
                            </div>
                            <div class="p-4 align-self-end">
                                Brindar capacitación 
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
                                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <label for="email" class="col-md-8 control-label">Correo Electronico</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                        
                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <label for="password" class="col-md-4 control-label">Contraseña</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="password" type="password" class="form-control" name="password" required>
                        
                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                        
                                                <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-4">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <div class="form-group">
                                                    <div class="col-md-8 col-md-offset-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            Entrar
                                                        </button>
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
                                 <a class="btn btn-link" href="{{ route('password.request') }}">¿Olvidaste tu Contraseña?</a>
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
                                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                                        @csrf
                
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                
                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            </div>
                                        </div>
                
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                         </div>
                        </div>             
                         <div class="modal-footer">
                             <div class="col-12 text-center">
                                 {{-- <a class="text-center" href="">¿Olvidaste tu Contrasena?</a> --}}
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
 