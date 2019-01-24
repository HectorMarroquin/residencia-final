@extends('emprendedor')

@section('empren')

<div id="page-content-wrapper" class="form-group" >
    <div class="container-fluid">
           
                <div class="container">
                    <h2>Entrega de Actividades</h2>
                    <br>
                    <!-- Nav pills -->
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#home">Entrega 1</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#menu1">Entrega 2</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#menu2">Entrega 3</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="home" class="container tab-pane active"><br>
                             <form class="form-group" method="post" action="{{ route('Enviar.store')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                            <h3>Entrega 1</h3>
                                <p>Subir un archivo Word con las actividades solicitas en en la fase en curso. Recuerda que solo puedes subier el pdf solo una vez</p>
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Fase</th>
                                                    <th scope="col">Proyectos</th>
                                                    <th scope="col">Entregas</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select name="fase" class="custom-select">
                                                                <option value="{{ $fase->id}}">{{ $fase->NombreFase}}</option>
                                                        </select>
                                                    
                                                    </td>
                                                    
                                                    <td>
                                                        <select name="proyecto" class="custom-select">
                                                                <option value="{{ $proyectos->id }}">{{ $proyectos->NombreProd }}</option>
                                                               
                                                        </select>
                                                    </td>
                                                    
                                                    <td>
                                                        <select name="numeroentrega" class="custom-select">
                                                                <option value="1">Primera Entrega</option>
                                                               
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="4">
                                                        @if (empty($avance))
                                                        <div class="form-group">
                                                            <label for="">Documento</label>
                                                            <input type="file" name="documento1" class="form-control">
                                                        </div>
                                                        
                                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                                        @else
                                                        <p>Ya realizaste la primera entrega</p>
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                        </div>

                        <div id="menu1" class="container tab-pane fade"><br>
                            <h3>Entrega 2</h3>
                                <p>Subir un archivo Word con las actividades solicitas en en la fase en curso. Recuerda que solo puedes subier el pdf solo una vez</p>
                                 <form class="form-group" method="post" action="{{ route('Enviar.entregados')}}
                                 " enctype="multipart/form-data">
                                {{ csrf_field() }}
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Fase</th>
                                                    <th scope="col">Proyectos</th>
                                                    <th scope="col">Entregas</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select name="fase2" class="custom-select">
                                                                <option value="{{ $fase->id}}">{{ $fase->NombreFase}}</option>
                                                        </select>
                                                    
                                                    </td>
                                                    
                                                    <td>
                                                        <select name="proyecto2" class="custom-select">
                                                                <option value="{{ $proyectos->id }}">{{ $proyectos->NombreProd }}</option>
                                                               
                                                        </select>
                                                    </td>
                                                    
                                                    <td>
                                                        <select name="numeroentrega2" class="custom-select">
                                                                <option value="2">Segunda Entrega</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="4">
                                                        @if (!empty($avancedos))
                                                        <p>Ya enviaste tu segundo avance</p>
                                                        @elseif (!empty($avance))
                                                        <div class="form-group">
                                                            <label for="">Documento</label>
                                                            <input type="file" name="documento2" class="form-control">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                                        @else
                                                        <p>Envia tu primer entrega</p>
                                                         
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                        </div>
                        <div id="menu2" class="container tab-pane fade"><br>
                           <h3>Entrega 3</h3>
                                <p>Subir un archivo Word con las actividades solicitas en en la fase en curso. Recuerda que solo puedes subier el pdf solo una vez</p>
                                 <form class="form-group" method="post" action="{{ route('Enviar.entregatres')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Fase</th>
                                                    <th scope="col">Proyectos</th>
                                                    <th scope="col">Entregas</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select name="fase3" class="custom-select">
                                                                <option value="{{ $fase->id}}">{{ $fase->NombreFase}}</option>
                                                        </select>
                                                    
                                                    </td>
                                                    
                                                    <td>
                                                        <select name="proyecto3" class="custom-select">
                                                                <option value="{{ $proyectos->id }}">{{ $proyectos->NombreProd }}</option>
                                                               
                                                        </select>
                                                    </td>
                                                    
                                                    <td>
                                                        <select name="numeroentrega3" class="custom-select">
                                                                <option value="3">Tercer Entrega</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="4">
                                                        
                                                        
                                                       @if ( !empty($avancetres))
                                                        <p>Ya enviaste tu 3 entrega</p>
                                                        @elseif ( (!empty($avance)) && (!empty($avancedos)) )
                                                        <div class="form-group">
                                                            <label for="">Documento</label>
                                                            <input type="file" name="documento3" class="form-control">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                                        @else
                                                        <p>Tienes que enviar la 2 entrega </p>
                                                         @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection