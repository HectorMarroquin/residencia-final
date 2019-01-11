@extends('layoutAdmin')

@section('content')

<div class="espacio"></div>
<div class="container-fluid borde">
	 <form class="needs-validation" method="POST" action="{{ route('asesores.store') }}" novalidate>
		{{ csrf_field() }}
		<div class="row justify-content-center">
				<div class="col borde1"><h3>Registro de Asesoreres</h3></div>
			</div>
			
			<div class="form-row justify-content-center">
			    <div class="form-group col-10">
				      <label for="inputName1">Nombre Completo</label>
					  <input type="text" name="Nombre" class="form-control" id="inputName1" value="{{ old('Nombre') }}">
					  {!! $errors->first('Nombre', '<span class=errores>:message</span>') !!}
			    </div>
			</div>

			<div class="form-row justify-content-md-center">
			    <div class="form-group col-md-5">
				      <label for="inputName1">Apellido Paterno</label>
				      <input type="text" name="ApellidoP" class="form-control" id="inputName1" value="{{ old('ApellidoP') }}">
			    </div>
			    <div class="form-group col-md-5">
				      <label for="inputApellido">Apellido Materno</label>
				      <input type="text" name="ApellidoM" class="form-control" id="inputApellido" value="{{ old('ApellidoM') }}">
			    </div>
			</div>

			<div class="form-row justify-content-md-center">
			    <div class="form-group col-md-5">
				      <label for="inputDireccion">Dirección</label>
				      <input type="text" name="Direccion" class="form-control" id="inputDireccion" value="{{ old('Direccion') }}">
			    </div>
			    <div class="form-group col-md-5">
				      <label for="inputCiudad">Ciudad</label>
				      <input type="text" name="Ciudad" class="form-control" id="inputCiudad" value="{{ old('Ciudad') }}">
			    </div>
			</div>

		    <div class="form-row justify-content-md-center">
			    <div class="form-group col-md-5">
			      <label for="inputEstado">Entidad Federativa</label>
			      <select id="inputEstado" name="Estado" class="form-control">
			        <option selected>Seleccione...</option>
			        <option value="Aguscalientes">Aguascalientes</option>
			         <option value="Baja California">Baja California</option>
			         <option value="Baja California Sur">Baja California Sur</option>
			         <option value="Campeche">Campeche</option>
			         <option value="Coahuila">Coahuila</option>
			         <option value="Colima">Colima</option>
			         <option value="Chiapas">Chiapas</option>
			         <option value="Chihuahua">Chihuahua</option>
			         <option value="Distrito Federal">DF</option>
			         <option value="Durango">Durango</option>
			         <option value="Guanajuato">Guanajuato</option>
			         <option value="Guerrero">Guerrero</option>
			         <option value="Hidalgo">Hidalgo</option>
			         <option value="Jalisco">Jalisco</option>
			         <option value="Mexico">México</option>
			         <option value="Michoacan">Michoacán</option>
			         <option value="Morelos">Morelos</option>
			         <option value="Nayarit">Nayarit</option>
			         <option value="Nuevo Leon">Nuevo León</option>
			         <option value="Oaxaca">Oaxaca</option>
			         <option value="Puebla">Puebla</option>
			         <option value="Queretaro">Querétaro</option>
			         <option value="Quintana">Quintana Roo</option>
			         <option value="San Luis Potosi">San Luis Potosí</option>
			         <option value=Sinaloa"">Sinaloa</option>
			         <option value="Sonora">Sonora</option>
			         <option value="Tabasco">Tabasco</option>
			         <option value="Tamaulipas">Tamaulipas</option>
			         <option value="Tlaxcala">Tlaxcala</option>
			         <option value="Veracruz">Veracruz</option>
			         <option value="Yucatan">Yucatán</option>
			         <option value="Zacatecas">Zacatecas</option>

			      </select>
			    </div>
			    <div class="form-group col-md-5">
				      <label for="inputColonia">Colonia</label>
				      <input type="text" name="Colonia" class="form-control" id="inputColonia" value="{{ old('Colonia') }}">
			    </div>
		  </div>

		  <div class="form-row justify-content-md-center">
		    <div class="form-group col-md-5">
			      <label for="inputCP">Codigo Postal</label>
			      <input type="text" name="CP" class="form-control" id="inputCP" value="{{ old('CP') }}">
		    </div>
		    <div class="form-group col-md-5">
			      <label for="inputRFC">RFC</label>
			      <input type="text" name="RFC" class="form-control" id="inputRFC" value="{{ old('RFC') }}">
		    </div>
		  </div>

		  <div class="form-row justify-content-md-center">
			     <div class="form-group col-md-5">
			      	<label for="inputEscola">Escolaridad</label>
				      <select id="inputEscola" name="Escolaridad" class="form-control">
					        <option selected>Seleccione...</option>
					        <option value="Carrera Tecnica">Carrera Técnica</option>
					        <option value="Doctorado">Doctorado</option>
					        <option value="Licenciatura">Licenciatura</option>
					        <option value="Maestria">Maestria</option>
					        <option value="Ninguno">Ninguno</option>
					        <option value="Preperatoria/Bachillerato">Preparatoria/Bachillerato</option>
					        <option value="Primaria">Primaria</option>
					        <option value="Secundaria">Secundaria</option>
				      </select>
			    </div>
			    <div class="form-group col-md-5">
				      <label for="inputCURP">CURP</label>
				      <input type="text" name="CURP" class="form-control" id="inputCURP" value="{{ old('CURP') }}">
			    </div>
		  </div>

		  <div class="form-row justify-content-md-center">
			    <div class="form-group col-md-5">
				      <label for="inputTel">Telefono</label>
				      <input type="text" name="Telefono" class="form-control" id="inputTel" value="{{ old('Telefono') }}">
			    </div>
			    <div class="form-group col-md-5">
				      <label for="inputFecha">Fecha De Nacimiento</label>
				      <input type="text" name="FechaNacimiento" class="form-control" id="inputFecha" value="{{ old('FechaNacimiento') }}">
			    </div>
		  </div>

		  <div class="form-row justify-content-md-center">
			  	<div class="form-group col-md-5">
				  	<label for="inputCivil">Estado Civil</label>
			        <input type="text" name="EstadoCivil" class="form-control" id="inputCivil" value="{{ old('EstadoCivil') }}">
			  </div>
			  	<div class="form-group col-md-5">
				  	<label for="inputEmail">Correo Electronico</label>
			        <input type="text" name="Correo" class="form-control" id="inputEmail">
			  </div>
		  </div>

		  <div class="form-row justify-content-md-center mt">
		 	 <div class="custom-control custom-radio custom-control-inline">
				  <input type="radio" id="customRadioInline1" name="Sexo" value="Femenino" class="custom-control-input">
				  <label class="custom-control-label" for="customRadioInline1">Femenino</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				  <input type="radio" id="customRadioInline2" name="Sexo" value="Masculino" class="custom-control-input">
				  <label class="custom-control-label" for="customRadioInline2">Masculino</label>
			</div>
		 </div>

		  <div class="form-row justify-content-md-center mt-4">
		    <div class="form-group col-md-5">
			      <label for="inputContra1">Contraseña</label>
			      <input type="password" name="Contraseña" class="form-control" id="inputContra1">
		    </div>
		    <div class="form-group col-md-5">
			      <label for="inputContra2">Confirmar Contraseña</label>
			      <input type="password" class="form-control" id="inputContra2">
		    </div>
		  </div>
		  <div class="form-row justify-content-md-center">
		  		  <button type="submit" class="btn btn-primary">Registrar</button>
		  </div>
			
	 </form>
</div>

@endsection