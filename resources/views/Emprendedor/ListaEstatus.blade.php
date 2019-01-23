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
                      
                      <th scope="col">Nombre del proyecto</th>
                      <th scope="col">Retroalimentacion 1</th>
                      <th scope="col">Retroalimentacion 2</th>
                    
                     
                </tr>
          </thead>
          <tbody>
              
                <tr>
                  <td>{{ $proyectos->NombreProd}}</td>
                   @forelse($archivos as $archivo)
                   @if(!empty($archivo->Comentario))
                  <td>
                    <a type="button" class="btn btn-primary" href="{{ route('Estado.edit', $archivo->id ) }}">
                    <i class="fas fa-file-download"> Descargar Archivo</i></a>                             
                  </td>
                   @endif 
                  @empty
                           <td style="text-align: center;"><h4>No Hay Archivos</h4></td>
                        @endforelse 
                  




                   @forelse($archivoss as $archivos)
                   @if(!empty($archivos->Comentario))
                  <td>
                    <a type="button" class="btn btn-primary" href="{{ route('Estado.edit', $archivos->id ) }}">
                    <i class="fas fa-file-download"> Descargar Archivo</i></a>                             
                  </td>
                   @endif 
                  @empty
                           <td style="text-align: center;"><h4>No Hay Archivos</h4></td>
                        @endforelse 

                 


            

            
                </tr>

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
@endsection