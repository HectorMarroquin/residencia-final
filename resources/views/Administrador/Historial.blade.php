@extends('administrador')
 
@section('admin')
<div class="espacio1"></div>
<div class="container-fluid rounded" style="background-color: #f8f9f9;">
    
    <div class="container">
      
      <div class="row align-items-center">
        
        <div class="col-xs-4">
          
          <form class="mb-4 pt-4" method="GET" action="{{route('historial.index')}}">
              {!! csrf_field() !!}
              <div class="input-group">
                <input name="Nombre" type="search" class="form-control" placeholder="Buscar proyectos">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form> 

        </div>


        <div class="col-xs-4">  
              <div class="btn-group dropright">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Status
              </button>
             <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">Aprobado</a>
              <a class="dropdown-item" href="#">No aprobado</a>
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
              <th scope="col">Actividad</th>
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
            <td><span class="badge badge-pill badge-success">{{ $proyecto->Estado }}</span></td>
            <td>
              
             
                <form style="display: inline;" method="POST" action="{{ route('historial.destroy', $proyecto->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href=# class="btn-dele"><i class="fas fa-trash-alt" style="font-size: 35px; color: red;"></i></a>
                  
                </form> 
               
        
                <a href="{{ route('historial.show', $proyecto->id) }}">
                    <i class="fas fa-file-download" style="font-size: 35px;"></i>
                </a>
            </td>
        </tr>
        @empty
        <td colspan="8" style="text-align: center;"><h4>No hay proyectos Registrados</h4></td>
        @endforelse
          
       </tbody>
    </table>
    {!! $proyectos->links("pagination::bootstrap-4") !!}
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-4 mb-5">
            
            <a href="{{ route('historial.create')}}">
                <span class="text-danger h5">Descargar proyectos en PDF</span> 
            </a>
            
          </div>
       
       
          
      </div>
    </div>
  </div>
</div>

</div>

@endsection