@extends('emprendedor')

@section('empren')

<br>
<br>
<br>
<div class="card">
<div class="card-header"><h5>Estado del Proyecto</h5></div>
<div class="card-body">
    
<div class="table-responsive-md">  
{!! csrf_field() !!} 
        <table class="table table-hover table-bordered">
            <thead class="thead-light">
                <tr>
                      <th scope="col">Numero De Entrega</th>
                      <th scope="col">Nombre del proyecto</th>
                      <th scope="col">Fase</th>
                      <th scope="col">Retroalimentacion</th>
                    
                     
                </tr>
          </thead>
          <tbody>
              @forelse ($avances as $avance )
                <tr>
                    <td>{{ $avance->NumeroEntrega }}</td>
                    <td> {{ $avance->Proyecto->NombreProd}} </td>
                    <td> {{ $avance->Fase->NombreFase }} </td>
                    @if ($avance->NumeroEntrega)
                    <td> 
                      <a type="button" class="btn btn-primary" href="{{ route('Archivo.edit', $avance->id) }}">
                            <i class="fas fa-file-download"> Descargar Archivo</i></a>
                       </td>
                    @else
                      <td><span style="font-weight:bold;">No existe retroalimentacion por el momento</span></td>
                    @endif
                    
                    @empty
                        <td colspan="6" style="text-align: center;"><h4>No Hay Proyectos Registrados</h4></td>
                         </tr>

                        @endforelse

           </tbody>
        </table>
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

<!-- Modal para Estado del proyecto -->
<div class="containar">
  <div class="modal fade" id="ventana">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Header de la ventana-->
        <div class="modal-header">
          <h5>Estado Del Proyecto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
         <!-- Contenido de la ventana-->
        <div class="modal-body">
          <form class="needs-validation" novalidate>
              <table class="table">
                <tr> 
                  <td>
                     <label>Nombre del asesor</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Juan carlos</label>
                  </td>         
                </tr>

                <tr>
                  <td><label>Apellido Paterno</label><br></td>
                </tr>

                <tr>
                  <td><label>Pimentel</label></td>
                </tr>
      
              </table>
            </form>
            </div>
         <!-- footer de la ventana-->

        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection