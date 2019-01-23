@extends('asesor')

@section('contenido')
	<div class="row">

	<main class="main col">
			<div class="row d-flex justify-content-center">
				<div class="col-10 ">	
				  <h2>Lista de Proyectos</h2>
				  <p>Listado de proyectos que esta asesorando</p>

				  <br>
				
				 <table class="table table-hover table-bordered">
			  		<thead class="thead-dark">
			     		<tr style="text-align: center">
			      			<th scope="col">Nombre de Emprendedor</th>
			      			<th scope="col">Apellidos</th>
			      			<th colspan="2" scope="col">Proyecto</th>
			      			<th scope="col">Informacion</th>
			    		</tr>
			  		</thead>
			  					
			  		<tbody>
							
			  			@forelse($asesor->asignaciones as $user)
			  				<tr>
			  					<td>{{ $user->proyecto->emprendedor->Nombre }}</td>
					  			<td>{{ $user->proyecto->emprendedor->ApellidoP }} {{ $user->proyecto->emprendedor->ApellidoM }}</td>
					  			<td>{{ $user->proyecto->NombreProd }}</td>	
		
			  			<td>
			  				<a type="button" class="btn btn-info" href="{{ route('projects.show', $user->proyecto->id) }}"><i class="fas fa-eye"> Consultar Avances</i></a>							
			  			</td>

			  			<td>
			  				<a type="button" class="btn btn-info" href="{{ route('asesor.show', $user->proyecto->emprendedor->id) }}"><i class="fas fa-eye"> Alta de Emprendedor</i></a>							
			  			</td>
			  		</tr>

			  	@empty
					<td colspan="6" style="text-align: center;"><h4>No Hay Proyectos Registrados</h4></td>
					@endforelse
					
			  </tbody>
			</table>
	  								
	  								<nav class="d-flex justify-content-center">
										<ul class="pagination pagination-sm">
											<li class="page-item disabled">
												<span class="page-link" aria-hidden="true">&laquo; Anterior</span>
											</li>
											<li class="page-item active"><a href="#" class="page-link">1</a></li>
											<li class="page-item"><a href="#" class="page-link">2</a></li>
											<li class="page-item"><a href="#" class="page-link">3</a></li>
											<li class="page-item"><a href="#" class="page-link">4</a></li>
											<li class="page-item">
												<a href="#" class="page-link">
													<span aria-hidden="true">Siguiente &raquo; </span>
												</a>
											</li>
										</ul>
									</nav>	
	  															
										</div>

										
							</div>
						</div>

				
				</div>
			</main>

		</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>			
@stop