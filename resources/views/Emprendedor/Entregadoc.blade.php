@extends('LayoutsEmpren')

@section('contenido')
        <div id="page-content-wrapper" class="form-group" >
               <div class="container-fluid">
                <form>
                    {!! csrf_field() !!}
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
                                                    <td>Esdras de jesus marroquin gomez</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="4">
                                                        <div class="custom-file">
                                                            <form action="/action_page.php">
                                                            <div class="form-group">
                                                                  <input type="file" class="form-control-file border" name="file">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                                        </form>
                                                    </div>
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
                                                        <form action="/action_page.php">
                                                           <div class="form-group">
                                                                  <input type="file" class="form-control-file border" name="file">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Enviar</button>
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
                                                        <form action="/action_page.php">
                                                            <div class="form-group">
                                                                  <input type="file" class="form-control-file border" name="file">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Enviar</button>
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