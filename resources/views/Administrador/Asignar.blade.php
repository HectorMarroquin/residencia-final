@extends('administrador')
 
@section('admin')
<div class="container">
	<form class="form-inline mb-4 pt-4">
			{{ csrf_field() }}
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
   	</form>
</div>
	
<div class="container-fluid">
   <form action="{{ route('asignaciones.store') }}" method="post">
		{{ csrf_field() }}
	<div class="table-responsive-md">	
		
		<table class="table table-hover table-bordered">
    		<thead class="thead-light">
			    <tr>
				      <th scope="col">Emprendedor</th>
				      <th scope="col">Apellidos</th>
				      <th scope="col">Proyectos</th>
				      <th scope="col">Asesores</th>
				      <th scope="col">Confirmación</th>
			    </tr>
		  </thead>
		  <tbody>
				@forelse ($emprendedores as $emprendedor)
			    <tr>
					
					
						<td>{{ $emprendedor->Nombre }}</td>
						<td>{{ $emprendedor->ApellidoP }} {{ $emprendedor->ApellidoM }}</td>
						<td>
							<select name="proyecto_id" class="custom-select">
								<option disabled="disabled" selected>Proyectos</option>
									@foreach ($emprendedor->proyectos as $proyecto)
										<option value="{{$proyecto->id}}">{{ $proyecto->NombreProd }}</option>
									@endforeach
							</select>
							{!! $errors->first('proyecto_id', '<span class=errores>:message</span>') !!}
						</td>
						<td>
								<select name="asesor_id" class="custom-select">
									<option disabled="disabled" selected>Asesores</option>
										@foreach ($asesores as $asesor)
											<option value="{{$asesor->id}}">{{ $asesor->Nombre }} {{$asesor->ApellidoP}} {{$asesor->ApellidoM}}</option>
										@endforeach
								</select> 
							</td>
					  <td>
							
							<button type="submit" class="btn btn-success"><i class="fas fa-check-square"></i></button>
							
					 </td>
				</tr>
				@empty
					<td colspan="6" style="text-align: center;"><h4>No Hay Asesores Registrados</h4></td>
				@endforelse
		   </tbody>
		</table>
		{!! $emprendedores->links("pagination::bootstrap-4") !!}
	  </div>
	</form>
</div>

@endsection