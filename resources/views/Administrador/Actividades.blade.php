@extends('layoutAdmin')

@section('content')

<div class="container">
  <h2>Panel De Actividades</h2>
  <br>
  
</div>

<div class="card border-secondary">
  <div class="card-header">Agregar Actividades</div>
  <div class="card-body text-secondary">	
   		<div class="container">
   			<form method="POST" action="{{ route('actividades.store') }}">
   			{{ csrf_field() }}
   			<div class="row align-items-center">
   				<div class="col-3">
					<div class="input-group">
						 <select name="fase_id" class="custom-select">
							<option disabled="disabled" selected>Seleccione Fase</option>
							@foreach($fases as $fase)
						   
						   <option value="{{ $fase->id }}">{{ $fase->NombreFase }}</option>

						   @endforeach
						 </select>
					</div>
   				</div>
   				
   				<div class="col-4">
   					<div class="input-group input-group">
					    <div class="input-group-prepend">
					       <span class="input-group-text">Actividad</span>
					    </div>
					    <input type="text" name="Nombre" class="form-control">
				  </div>
   				</div>

   				<div class="col-5">
   					
					<div class="input-group">
					  <div class="input-group-prepend">
					    <span class="input-group-text">Descripcion</span>
					  </div>
					  <textarea class="form-control" name="Descripcion" aria-label="With textarea"></textarea>
					</div>

   				</div>
			
   			</div>
   			
   			<div class="row justify-content-center text-center mt-3">
   				<div class="col-4">
   					<button type="submit" class="btn btn-success">Agregar</button>
   				</div>
   			</div>
   		</form>
   		</div>
   
  </div>
</div>


<div class="card bg-light mb-5 mt-5 border-secondary">
  <div class="card-header bg-info">Consultar Actividades</div>
  <div class="card-body">

<div class="container-fluid">
		<div class="table-responsive-md">	
		<table class="table table-hover table-sm">
		  <thead >
		    <tr>
		      <th scope="col">Nombre de Fase</th>
		      <th scope="col">Actividad</th>
		      <th scope="col">Funciones</th>
		    </tr>
		  </thead>
		  <tbody>
					@forelse ($fases as $fase)

					<tr>
							<td>{{$fase->NombreFase}}</td>

							<td>
								<select name="" id="" class="custom-select">
										<option disabled="disabled" selected>Actividades</option>
										@foreach ($fase->actividades as $actividad)
												<option value="{{$actividad->id}}">{{ $actividad->Nombre }}</option>
										@endforeach
								</select>
							</td>
							@isset($actividad->id)
							<td> 
								 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalAct{{$actividad->id}}"><i class="fas fa-trash-alt"></i></button>
						 		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalUpdate{{$actividad->id}}"><i class="fas fa-pen-square"></i></button>
							</td>
						</tr>
						
									
							
						<div class="modal fade" id="myModalAct{{$actividad->id}}">
								<div class="modal-dialog">
									<div class="modal-content">
									
										<!-- Modal Header -->
										<div class="modal-header">
											<h4 class="modal-title">Eliminar Actividad</h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										
										<!-- Modal body -->
										<div class="modal-body">
										 ¿Estas seguro que deseas eliminar la actividad?
										</div>
										
										<!-- Modal footer -->
										<div class="modal-footer">
											 <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
											 <form style="display: inline;" method="POST" action="{{ route('actividades.destroy', $actividad->id) }}">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}
											 <button type="submit" class="btn btn-secondary">Aceptar</button>
										 </form>
										</div>
										
									</div>
								</div>
						</div>		
						
						
						
						<div class="modal fade" id="myModalUpdate{{$actividad->id}}">
								<div class="modal-dialog">
									<div class="modal-content">
									
										<!-- Modal Header -->
										<div class="modal-header">
											<h4 class="modal-title">Actualizar Actividad</h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										
										<!-- Modal body -->
										<div class="modal-body">
												<form>
														<div class="form-group">
															<label for="recipient-name" class="col-form-label">Nombre de Actividad:</label>
															<input type="text" class="form-control" id="recipient-name" value="{{$actividad->Nombre}}">
														</div>
														<div class="form-group">
															<label for="message-text" class="col-form-label">Descripcion:</label>
															<textarea class="form-control" id="message-text"></textarea>
														</div>
													
										</div>
										
										<!-- Modal footer -->
										<div class="modal-footer">
												<div class="modal-footer">
														<button type="submit" class="btn btn-primary">Guardar Cambios</button>
													
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
													</div>
										</div>
									</form>
									</div>
								</div>
						</div>

						@endisset
					  
					</tr>
					@empty
					<td colspan="3" style="text-align: center;"><h4>No Hay Fases Registrados</h4></td>
					@endforelse
		    </tbody>
	   	 </table>
    	</div>
    </div>
  </div>
</div>

@endsection

