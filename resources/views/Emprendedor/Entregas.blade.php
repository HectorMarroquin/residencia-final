@extends('LayoutsEmpren')

@section('contenido')
<br>
<br>
        <div id="page-content-wrapper" class="form-group" >
               <div class="container-fluid">
                <h2>Fases del Proyecto</h2> <br>
                <form>
                    {!! csrf_field() !!}
                    <p>Las fases se deben subier para que el asesor pueda asignar una calificacion</p>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" class="card-link" data-toggle="collapse" href="#collapseUno">
                                <a >
                                   Resumen Ejecutivo
                                           
                                </a>
                            </div>
                            <div id="collapseUno" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="alert alert-warning">
                                    <h5>En un documento colocar todas las actividades que se solicitan y enviarlo en un documento pdf </h5>
                                    </div>
                                   <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Actividades</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($actividades as $actividad)
                                        <tr>
                                            <td>
                                                <ol>
                                                    <li>{{$actividad->Nombre}}</li>
                                                    
                                                </ol>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td><a href="{{ route('Archivo.show', $proyectos->id) }}" class="btn btn-primary">Enviar</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" class="collapsed card-link" data-toggle="collapse" href="#collapseDos">
                            <a >
                                   Mercado 
                            </a>
                        </div>

                        <div id="collapseDos" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                 <div class="alert alert-warning">
                                    <h5>En un documento colocar todas las actividades que se solicitan y enviarlo en un documento pdf </h5>
                                    </div>
                                   <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Actividades</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <ol>
                                                    <li>Marco Teorico</li>
                                                    <li>Mapa conceptual</li>
                                                    <li>Logotipo</li>
                                                </ol>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{ route('Archivo.show', $proyectos->id) }}" class="btn btn-primary">Enviar</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card" >
                        <div class="card-header" class="collapsed card-link" data-toggle="collapse" href="#collapseTres">
                            <a >
                                Tecnico
                            </a>
                        </div>
                        
                        <div id="collapseTres" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                   <div class="alert alert-warning">
                                    <h5>En un documento colocar todas las actividades que se solicitan y enviarlo en un documento pdf </h5>
                                    </div>
                                   <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Actividades</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <ol>
                                                    <li>Marco Teorico</li>
                                                    <li>Mapa conceptual</li>
                                                    <li>Logotipo</li>
                                                </ol>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{ route('Archivo.show', $proyectos->id)}}" class="btn btn-primary">Enviar</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" class="collapsed card-link" data-toggle="collapse" href="#collapseCuarto">
                            <a >
                                Diseño Organizacinal, Marco Legal y Fiscal
                            </a>
                        </div>

                        <div id="collapseCuarto" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                  <div class="alert alert-warning">
                                    <h5>En un documento colocar todas las actividades que se solicitan y enviarlo en un documento pdf </h5>
                                    </div>
                                   <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Actividades</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <ol>
                                                    <li>Marco Teorico</li>
                                                    <li>Mapa conceptual</li>
                                                    <li>Logotipo</li>
                                                </ol>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{ route('Archivo.show', $proyectos->id)}}" class="btn btn-primary">Enviar</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card" >
                        <div class="card-header" class="collapsed card-link" data-toggle="collapse" href="#collapseQuinto">
                            <a>
                                Estudio Financiero
                            </a>
                        </div>

                        <div id="collapseQuinto" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                  <div class="alert alert-warning">
                                    <h5>En un documento colocar todas las actividades que se solicitan y enviarlo en un documento pdf </h5>
                                    </div>
                                   <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Actividades</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <ol>
                                                    <li>Marco Teorico</li>
                                                    <li>Mapa conceptual</li>
                                                    <li>Logotipo</li>
                                                </ol>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{ route('Archivo.show', $proyectos->id)}}" class="btn btn-primary">Enviar</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    


@endsection