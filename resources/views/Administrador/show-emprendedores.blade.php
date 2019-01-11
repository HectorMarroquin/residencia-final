@extends('layoutAdmin')

@section('content')

<div class="container">
	<form class="form-inline mb-4 pt-4" method="GET" action="{{route('emprendedores.index')}}">
			{!! csrf_field() !!}
	      <input name="Nombre" class="form-control mr-sm-2" type="search" placeholder="Buscar emprendedor" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
   	</form>
</div>
	


<div class="card">
  <div class="card-header bg-secondary text-white"><h5>Consultar Emprendedor</h5></div>
  <div class="card-body">
  	
<div class="table-responsive-md">	
		<table class="table table-hover table-bordered">
    		<thead class="thead-light">
			    <tr>
				      <th scope="col">Nombre</th>
				      <th scope="col">Apellidos</th>
				      <th scope="col">Proyectos</th>
				      <th scope="col">Telefono</th>
				      <th scope="col">RFC</th>
				      <th scope="col">Fase</th>
				      <th scope="col">Funciones</th>
			    </tr>
		  </thead>
		  <tbody>
					@forelse ($emprendedores as $emprendedor)

					<tr>
				      <td>{{ $emprendedor->Nombre}}</td>
				      <td>{{ $emprendedor->ApellidoP}} {{ $emprendedor->ApellidoM}}</td>
				      <td>
									<select name="" class="custom-select">
											<option disabled="disabled" selected>Proyectos</option>
												@foreach ($emprendedor->proyectos as $proyecto)
													<option value="">{{ $proyecto->NombreProd }}</option>
												@endforeach
									</select>
							</td>
				      <td>{{ $emprendedor->TelefonoCel}}</td>
				      <td>{{ $emprendedor->RFC}}</td>
				      <td>{{ $emprendedor->CURP }}</td>
			      	<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"><i class="fas fa-trash-alt"></i></button></td>
			    </tr>
					<div class="modal fade" id="myModal">
							<div class="modal-dialog">
								<div class="modal-content">
								
									<!-- Modal Header -->
									<div class="modal-header">
										<h4 class="modal-title">Eliminar Asesor</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									
									<!-- Modal body -->
									<div class="modal-body">
									 ¿Estas seguro que deseas eliminar al asesor?
									</div>
									
									<!-- Modal footer -->
									<div class="modal-footer">
										 <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
										 <form style="display: inline;" method="POST" action="{{ route('emprendedores.destroy', $emprendedor->id) }}">
											{{ csrf_field() }}
											{{ method_field('DELETE') }}
										 <button type="submit" class="btn btn-secondary">Aceptar</button>
									 </form>
									</div>
									
								</div>
							</div>
				</div>
					@empty
					<td colspan="8" style="text-align: center;"><h4>No Hay Emprendedores Registrados</h4></td>
					@endforelse
			    
		    </tbody>
			</table>
			{!! $emprendedores->links("pagination::bootstrap-4") !!}
		</div>
	</div>
	


</div>
@endsection