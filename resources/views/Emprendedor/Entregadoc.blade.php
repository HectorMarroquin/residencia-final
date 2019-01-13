@extends('LayoutsEmpren')

@section('contenido')
        <div id="page-content-wrapper" class="form-group" >
               <div class="container-fluid">
                <form>
                    @csrf
                    <div class="container">
                        <h2>Entrega de Actividades</h2>
                        <br>
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#Entrega1">Entrega 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#Entrega2" >Entrega 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#Entrega3">Entrega 3</a>
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
                                                    <th scope="col">Nombre de Proyecto</th>
                                                    <th scope="col">Nombre del Asesor</th>
                                                    <th scope="col">Nombre del Emprendedor</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>{{ $proyectos->NombreProd }}</td>
                                                    <td>Juan carlos pimentel diaz</td>
                                                    <td>{{ $proyectos->emprendedor_id }}</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="4">
                                                        <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label for="">Nombre</label>
                                                            <input type="text" name="name" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Documento</label>
                                                            <input type="file" name="documento" class="form-control">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                            
                            <div id="Entrega2" class="container tab-pane fade"><br>
                                <h3>Entrega 2</h3>
                                <p>Subir un archivo pdf con las actividades solicitas en en la fase en curso, con las correciones realizadas por el asesor. Recuerda que solo puedes subier el pdf solo una vez.</p>
                                 <div class="table-responsive-md">
                                    <form>
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Nombre de Proyecto</th>
                                                    <th scope="col">Nombre del Asesor</th>
                                                    <th scope="col">Nombre del Emprendedor</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>{{ $proyectos->NombreProd }}</td>
                                                    <td>Juan carlos pimentel diaz</td>
                                                    <td>Esdras de jesus marroquin gomez</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="4">
                                                         <form class="form-group" method="POST" action="{{ route('Archivo.store')}}" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label for="">Nombre</label>
                                                            <input type="text" name="name" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Documento</label>
                                                            <input type="file" name="documento1" class="form-control">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                       
                            </div>
                            <div id="Entrega3" class="container tab-pane fade"><br>
                                <h3>Entrega 3</h3>
                                <p>Subir un archivo pdf con las actividades solicitas en en la fase en curso, para ser calificado. Recuerda que solo puedes subier el pdf solo una vez.</p>
                                 <div class="table-responsive-md">
                                    <form>
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Nombre de Proyecto</th>
                                                    <th scope="col">Nombre del Asesor</th>
                                                    <th scope="col">Nombre del Emprendedor</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>{{ $proyectos->NombreProd }}</td>
                                                    <td>Juan carlos pimentel diaz</td>
                                                    <td>Esdras de jesus marroquin gomez</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="4">
                                                         <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label for="">Nombre</label>
                                                            <input type="text" name="name" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Documento</label>
                                                            <input type="file" name="documento2" class="form-control">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                                        </form>
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