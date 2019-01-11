@extends('layoutAs')

@section('contenido')
	<div class="row">

	<main class="main col">
						<div class="row mt-3 d-flex justify-content-center">
							<div class="col-10 ">
								
									  <h2>Lista de Proyectos</h2>
									  <p>Se muestran todos los proyectos que estan en asesorias</p> 
									  <div class="form-group row">
									  	<div class="col-12 col-md-6 mb-3">
										  <label for="sel1">Seleccionar Periodo:</label>
										  <select class="form-control" id="sel1">
										    <option>Agosto-Diciembre 2018</option>
										    <option>Enero-Junio 2019</option>
										    <option>Agosto-Diciembre 2019</option>
										   </select>
										</div>

										<div class="col-12 col-md-6 mb-3">
										 <label for="">Realizar busqueda:</label>
									  	 <input class="form-control" id="myInput" type="text" placeholder=""> 
										</div>	
									</div>
									 
									  <br>
									  <table class="table table-bordered table-hover table-reponsive">
									    <thead class="thead-dark">
									      <tr>
									      	<th>#</th>
									        <th>Nombre</th>
									        <th>Apellidos</th>
									        <th>Email</th>
									        <th>Nombre del Proyecto</th>
									        <th>Funciones</th>
									      </tr>
									    </thead>
									    <tbody id="myTable">
									      <tr>
									      	<td>1</td>
									        <td>Albertano</td>
									        <td>Marroquin Hernandez</td>
									        <td>Marroque@example.com</td>
									        <td>Drones para el riego de campo agricola</td>
									  		<td>
												<a href="{{ route('verproyectos') }}" class="btn btn-primary">ver</a>
									  		</td>
									      </tr>
									      <tr>
									      	<td>2</td>
									        <td>Mary</td>
									        <td>Perez Ramirez</td>
									        <td>mary@mail.com</td>
									        <td>Rockolas rentables en zonas turisticas</td>
									    	<td><a href="{{ route('verproyectos') }}" class="btn btn-primary">ver</a></td>

									      </tr>
									      <tr>
									      	<td>3</td>
									        <td>Julya </td>
									        <td>Dooley Doroti</td>
									        <td>july@greatstuff.com</td>
									      	<td>Venta de animales exoticos</td>
									      	<td><a href="{{ route('verproyectos') }}" class="btn btn-primary">ver</a></td>
									      </tr>
									      <tr>
									      	<td>4</td>
									        <td>Anja</td>
									        <td>Ravendale Arce</td>
									        <td>a_r@test.com</td>
									        <td>Productos de limpiezas naturales</td>
									        <td><a href="{{ route('verproyectos') }}" class="btn btn-primary">ver</a> </td>
									      </tr>
									      <tr>
									      	<td>5</td>
									        <td>Naranja</td>
									        <td>Manzana Arce</td>
									        <td>a_rosa@test.com</td>
									        <td>Productos de limpiezas naturales volumen 2</td>
									        <td><a href="{{ route('verproyectos') }}" class="btn btn-primary">ver</a> </td>
									      </tr>
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