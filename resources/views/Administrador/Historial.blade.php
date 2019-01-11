@extends('layoutAdmin')

@section('content')
<div class="espacio1"></div>
<div class="container-fluid rounded" style="background-color: #f8f9f9;">
    
    <div class="container">
      
      <div class="row align-items-center">
        
        <div class="col-4">
          
          <form class="mb-4 pt-4">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar proyectos">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form> 

        </div>

        <div class="col-4">  
              <div class="input-group">
              <select class="custom-select" id="inputGroupSelect02">
                <option selected>Selecciona...</option>
                <option value="1">Agosto-Diciembre 2018</option>
                <option value="2">Enero-Junio 2019</option>
                <option value="3">Agosto-Diciembre 2019</option>
              </select>
              <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect02">Periodos</label>
              </div>
            </div>
        </div>

        <div class="col-4">  
              <div class="btn-group dropright">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Status
              </button>
             <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">Aprovado</a>
              <a class="dropdown-item" href="#">Reprovado</a>
              <a class="dropdown-item" href="#">En curso</a>
            </div>
            </div>
        </div>

      </div>
    </div>
  
<div class="container-fluid">
  <h4>Historial de Proyectos</h4>
  <div class="table-responsive-md"> 
    <table class="table table-hover table-striped">
        <thead class="">
          <tr>
              <th scope="col">Numero</th>
              <th scope="col">Proyecto</th>
              <th scope="col">Empresa</th>
              <th scope="col">Telefono</th>
              <th scope="col">Correo</th>
              <th scope="col">Status</th>
              <th scope="col">Funciones</th>
          </tr>
      </thead>
      <tbody>
        @forelse ($proyectos as $proyecto)
        <tr>
            <td>{{ $proyecto->id}}</td>
            <td>{{ $proyecto->NombreProd }}</td>
            <td>{{ $proyecto->Actividad }}</td>
            <td>{{ $proyecto->Telefonoemp }}</td>
            <td>{{ $proyecto->CorreoEmp }}</td>
            <td><span class="badge badge-pill badge-success">Aprovado</span></td>
            <td><button class="btn btn-danger"><i class="fas fa-trash-alt"></i></i></button>
                <button class="btn btn-primary"><i class="fas fa-file-download"></i></button>
                <a href="{{ route('historial.show', $proyecto->id) }}">
                    Descargar proyectos en PDF
                </a>
            </td>
        </tr>
        @empty
        <td colspan="8" style="text-align: center;"><h4>No Hay Emprendedores Registrados</h4></td>
        @endforelse
          
       </tbody>
    </table>
    <a href="{{ route('historial.create', $proyecto->id) }}">
        Descargar proyectos en PDF
    </a>
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