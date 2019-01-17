@extends('administrador')
 
@section('admin')
	<div class="espacio"></div>
  <div class="card bg-light text-dark">
    <div class="card-body">
		<div class="container-fluid">
			<div class="table-responsive-md">	
			<table class="table table-hover table-bordered">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Nombre de Asesor</th>
			      <th scope="col">Apellidos</th>
			      <th scope="col">Direccion</th>
			      <th scope="col">Proyectos</th>
			      <th scope="col">Funciones</th>
			    </tr>
			  </thead>
			  <tbody>

			  	@forelse($asesores as $asesor)

			  		<tr>
			  			<td>{{ $asesor->Nombre }}</td>
			  			<td>{{ $asesor->ApellidoP }} {{ $asesor->ApellidoM }}</td>
			  			<td>{{ $asesor->Direccion }}</td>
			  			<td>
									<select name="" class="custom-select">
										<option disabled="disabled" selected>Proyectos</option>
											@foreach ($asesor->asignaciones as $asignacion)
												<option value="">{{ $asignacion->proyecto->NombreProd }}</option>
											@endforeach
									</select>
							</td>
			  			<td><a href="{{route('asesores.edit',$asesor->id)}}"> <i class="fas fa-pen-square" style="font-size: 40px;"></i></a>
							<button type="button" class="btn btn-danger mb-2" data-toggle="modal" data-target="#myModal{{$asesor->id}}"><i class="fas fa-trash-alt"></i></button>
			  			</td>
			  		</tr>
					@include('Administrador.Eliminar')
					{{-- @include('Administrador.Editar') --}}
			  	@empty
					<td colspan="6" style="text-align: center;"><h4>No Hay Asesores Registrados</h4></td>
					@endforelse
					
			  </tbody>
			</table>
		</div>
	</div>
   </div>

   <div class="card-footer text-muted">
	    <div class="container">
			    	<div class="row justify-content-center">
							{!! $asesores->links("pagination::bootstrap-4") !!}
						</div>
	  </div>		
   </div>
</div>


@endsection


