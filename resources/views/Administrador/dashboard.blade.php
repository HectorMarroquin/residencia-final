 @extends('layoutAdmin')

 @section('content')

	<div class="espacio"></div>
 	<div class="container">
 		
 		<div class="row">

 			<div class="col-8">

 				<h3>Bienvenido al Panel del Administrador</h3>
 					  
			</div>
				
			<div class="col-2">

				
					<img src="{{ asset('imagenes/logo.jpg') }}" class="rounded" alt="Cinque Terre" width="100" height="100"> 
 			</div>
 			<div class="col-2">

				
					<img src="{{ asset('imagenes/TecNM.png') }}" class="rounded" alt="Cinque Terre" width="150" height="100"> 
 			</div>
 		</div>
	</div>

	<div class="container mt-5">
		
		<div class="row justify-content-around">
 			<div class="col-sm-4">
 				<ul>
 					<li>Preincubadora para planes de negocio</li>
 					<li>Esta plataforma esta en su version Beta</li>
 					<li>Favor de leer sus instrucciones para su uso correcto</li>
 					<li>Si hay algun error favor de reportar con support'@'gmail.com</li>
 				</ul>
 			</div>
 			<div class="col-sm-4">


			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="imagenes/admin.jpg" alt="Card image cap">
			  <div class="card-body">
			    <p class="card-text">"Si tienes suficiente información para hacer un plan de negocio de tu idea es que ya es demasiado tarde"<blockquote class="blockquote text-center"> <cite title="Bill Gates">Bill Gates</cite></p></blockquote>
			  </div>
			</div>
 			</div>
 		</div>

	</div>

 @endsection
