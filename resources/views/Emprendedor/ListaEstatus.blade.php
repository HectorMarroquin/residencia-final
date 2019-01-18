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
                   @forelse($revisiones as $revision)
                  <td>
                     @if($revision->avance_id===1) 
                          <a type="button" class="btn btn-primary" href="">
                            <i class="fas fa-file-download"> Descargar Archivo</i></a>

                            <p> {{ $revision->Documento, $revision->id }}</p>    
                       @endif          
                                                 
                        @empty
                        <td colspan="6" style="text-align: center;"><h4>No Hay Archivos</h4></td>
                        @endforelse
                      
                  </td>


            

            
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