@extends('LayoutsEmpren')

@section('contenido')
<br>
<br>
        <div id="page-content-wrapper" class="form-group" >
               <div class="container-fluid">
                <h2>Fases del Proyecto</h2> <br>
                <form>
                    @csrf
                    <p>Las fases se deben subier para que el asesor pueda asignar una calificacion</p>
                    <div id="accordion">

                        @forelse ($fases as $fase )
                        <br>
                        <br>
                        <div class="card">
                            <div class="card-header" class="card-link" data-toggle="collapse" href="{{$fase->NombreFase}}">
                                <a >
                                   {{$fase->NombreFase}}         
                                </a>
                            </div>
                            <div id="collapseUno" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="alert alert-warning">
                                    <h5>En un documento colocar todas las actividades que se solicitan y enviarlo en un documento Word </h5>
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
                                                     @foreach ($fase->actividades as $actividad)
                                                    <li>{{ $actividad->Nombre }}</li>
                                                     @endforeach
                                                </ol>
                                               
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td><a href="{{ route('Archivo.show', $fase->id) }}" class="btn btn-primary">Enviar</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
                     @empty
                        <td colspan="6" style="text-align: center;"><h4>Fases No Registrados</h4></td>

                         </tr>

                        @endforelse
                </div>
            </form>
        </div>
    </div>
    


@endsection