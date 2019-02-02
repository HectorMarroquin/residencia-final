@extends('emprendedor')

@section('empren')

	<div class="espacio"></div>
 	<div class="container">
 		<div class="row">
 			<div class="table-responsive">
	 			<table class="table">
	 				<tr>
	 					<td class="col-2">
	 						<div>
	 							<img src="{{ asset('img/logo.jpg') }}" class="rounded" alt="Cinque Terre" width="100" height="100"> 
	 						</div>
	 					</td>

	 					<td class="col-8" style="text-align: center">
	 						<div>
	 							<h3>Bienvenido Emprendedor</h3>
							</div>
	 					</td>

	 					<td class="col-2">
	 						<div>
	 							<img src="{{ asset('img/TecNM.png') }}" class="rounded" alt="Cinque Terre" width="150" height="100"> 
	 						</div>
	 					</td>
	 				<tr>
	 			</table>
 			</div>
 		</div>
	</div>

	<br>
	<div class="table-responsive">
		<table class="table-borderless">
			<tr>
			<td>
				<h4>Instrucciones</h4>
			</td>
			</tr>
			<tr>
				<td class="container mt-2">
					<div class="row justify-content-around">
						<div class="list-group list-group-flush">
							<ul>
								<li class="list-group-item">1. Debe darte de alta como un empendedor para que puedas ver las demas opciones.</li>
								<li class="list-group-item">2. Debes de darle de alta a un proyecto.</li>
								<li class="list-group-item">3. Espera que se te asigne un asesor para poder continuar con tus entregas. </li>
								<li class="list-group-item">4. Envia tus entregas dandole clic en el boton entregas y en la vista que se vera sera de la fase donde inicias.</li>
								<li class="list-group-item">5. Solo puede enviar tres entregas por fase.</li>
								<li class="list-group-item">6. Tendras dos retroalimentacion por parte de tu asesor.</li>
								<li class="list-group-item">7. En la tercer entrega el asesor asignara si es aprobatorio la fase o no apobarorio.</li>
								<li class="list-group-item">8. En caso de ser aprobatorio la fase se habilitara el boton de enviar de la fase a continuar.</li>
								<li class="list-group-item">9. En caso de ser no aprobatorio el boton no seara habilitado.</li>

							</ul>
						</div>
					</div>	
		 		</td>
 			</tr>
 		</table>
 	</div>
 @endsection
