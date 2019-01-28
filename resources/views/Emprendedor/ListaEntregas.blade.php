@extends('emprendedor')

@section('empren')

<br>
<br>
<br>
<div class="card">
    <div class="card-header"><h5>Entregas del Proyecto</h5></div>
    <div class="card-body">
        <div class="table-responsive-md">
            <form>
                @csrf
                <table class="table table-hover table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nombre de Proyecto</th>
                            <th scope="col">Nombre del Asesor</th>
                            <th scope="col">Entregas</th>
                            <th scope="col">Retroalimentacion</th>
                            <th scope="col">Descargars</th>
                        </tr>
                    </thead>

                    <tbody>
                       
                        @forelse ($proyectos as $proyecto )
                            <tr> 
                                <td>{{ $proyecto->NombreProd }}</td>
                                    @if ($proyecto->Asignacion)
                                <td style="text-align: center;">
                                    {{ $proyecto->Asignacion->Asesor->Nombre }} {{ $proyecto->Asignacion->Asesor->ApellidoP }} {{ $proyecto->Asignacion->Asesor->ApellidoM }}</td> 
                                    @else
                                <td style="text-align: center;">
                                    <span style="font-weight:bold;">No hay asesor asignado por el momento.</span></td>
                                    @endif

                                    @if($proyecto->Asignacion)
                                <td style="text-align: center;">
                                    <a href="{{ route('Entregas.show', $proyecto->id) }}" class="btn btn-primary"><i class="fas fa-chalkboard-teacher"></i></a>
                                </td> 

                                <td style="text-align: center;">
                                    <a href="{{ route('Estado.show', $proyecto->id) }}" class="btn btn-primary"><i class="fas fa-file-signature"></i></a>
                                </td>
                                <td style="text-align: center;">
                                    <a href="{{ route('Lista.show', $proyecto->id) }}" class="btn btn-primary"><i class="fas fa-file-download"></i></a>
                                </td>
                                    @else
                                    <td colspan="6" style="text-align: center;">
                                        No hay asesor asignado 
                                   </td>
                                    @endif
                                    @empty
                                <td colspan="6" style="text-align: center;">
                                <h4>No Hay Proyectos Registrados</h4>
                                </td>
                            </tr>

                        @endforelse

                       

                    </tbody>
                </table>
            </form>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>

                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

@endsection