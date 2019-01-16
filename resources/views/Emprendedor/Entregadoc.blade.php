@extends('emprendedor')

@section('empren')

        <div id="page-content-wrapper" class="form-group" >
               <div class="container-fluid">
                <form class="form-group" method="POST" action="{{ route('Archivo.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        
                        <h2>Entrega de Actividades</h2>
                        <br>
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#Entrega1">Entrega 1</a>
                            </li>
                        </ul><!-- Tab panes -->

                        <div class="tab-content">
                            <div id="Entrega1" class="container tab-pane active"><br>
                                <h3>Entrega 1</h3>
                                <p>Subir un archivo pdf con las actividades solicitas en en la fase en curso. Recuerda que solo puedes subier el pdf solo una vez</p>
                                <div class="table-responsive-md">
                                    <form>
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
                                                            <option disabled="disabled" selected>Proyectos</option>
                                                                @foreach ($proyectos as $proyecto)
                                                                <option value="{{ $proyecto->id }}">{{ $proyecto->NombreProd }}</option>
                                                                @endforeach
                                                        </select>
                                                    </td>
                                                    
                                                    <td>
                                                        <select name="numeroentrega" class="custom-select">
                                                            <option disabled="disabled" selected>Numero Entrega</option>
                                                                <option value="1">Primera Entrega</option>
                                                                <option value="2">Segunda Entrega</option>
                                                                <option value="3">Tercer Entrega</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="4">
                                                        <div class="form-group">
                                                            <label for="">Documento</label>
                                                            <input type="file" name="documento" class="form-control">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection