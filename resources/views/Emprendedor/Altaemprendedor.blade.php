@extends('emprendedor')

@section('empren')
        <div id="page-content-wrapper" class="container-fluid form-group" >
               <br>
               <div class="container-fluid">
                <h2>Registro del Emprendedor</h2>
                @if (session()->has('registroempre'))
                    <div class="alert alert-success">{{ session('registroempre')}}</div>
                @endif
                <form method="POST" action="{{ route('Registro.store')}}">
                   {{ csrf_field() }}
                <table class="table">
                   
                    <tbody>
                        <tr>
                            <td>
                                <label>Nombre:</label>
                            </td>

                            <td colspan="3">
                                 <input type="text" name="Nombre" class="form-control infoemprendedor"  value="{{ old('Nombre') }}">
                                 {!! $errors->first('Nombre', '<span class=errores>:message</span>') !!}
                            </td>

                           
                        </tr>

                        <tr>
                             <td>
                                 <label>Apellido Paterno:</label>
                            </td>

                            <td>
                                <input type="text" name="ApellidoP" class="form-control infoemprendedor" value="{{ old('ApellidoP') }}">
                                {!! $errors->first('ApellidoP', '<span class=errores>:message</span>') !!}
                            </td>
                            </td>

                            <td>
                                <label>Apellido Materno</label>
                            </td>

                            <td>
                                <input type="text" name="ApellidoM" class="form-control infoemprendedor" value="{{ old('ApellidoM') }}">
                                {!! $errors->first('ApellidoM', '<span class=errores>:message</span>') !!}
                            </td>
                        </tr>


                        <tr>
                            <td>
                                 <label>Fecha de Nacimiento:</label>
                            </td>

                            <td>
                                  <input type="date" name="FechaNaci" class="form-control infoemprendedor" value="{{ old('FechaNaci') }}">
                                  {!! $errors->first('FechaNaci', '<span class=errores>:message</span>') !!}
                            </td>

                            <td>
                                <label>Edad:</label>
                            </td>

                            <td>
                                <input type="text" name="Edad"  class="form-control " value="{{ old('Edad') }}">
                                {!! $errors->first('Edad', '<span class=errores>:message</span>') !!}
                            </td>
                            
                        </tr>

                        <tr>
                             <td colspan="1">
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        Sexo:
                                    </label>
                                </div>
                            </td>

                            <td colspan="3">
                               <div class="form-group ">
                                    <select class="form-control col-sm-5" id="" name="Sexo" value="">
                                        <option value="">Seleccione una Opcion</option>
                                        <option value="Hombre">Hombre</option>
                                        <option value="Mujer">Mujer</option> 
                                    </select>
                                     {!! $errors->first('Sexo', '<span class=errores>:message</span>') !!}
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1">
                                <label>Estado Civil:</label>
                            </td>

                            <td colspan="3">
                                  <div class="form-group ">
                                    <select class="form-control col-sm-5" id="" name="EstadoCivil" value="">
                                        <option value="">Seleccione una Opcion</option>
                                        <option value="Soltero(a)">Soltero(a)</option>
                                        <option value="Casado(a)">Casado(a)</option>
                                        <option value="Divorsiado(a)">Divorsiado(a)</option>
                                        <option value="Viudo(a)">Viudo(a)</option>
                                        <option value="Unión libre">Unión libre</option>
                                        <option value="Separado(a)">Separado(a)</option>
                                    </select>
                                     {!! $errors->first('EstadoCivil', '<span class=errores>:message</span>') !!}
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Direccion:</label>
                            </td>

                            <td>
                                 <input type="text" name="Direccion"  class="form-control infoemprendedor" value="{{ old('Direccion') }}">
                                  {!! $errors->first('Direccion', '<span class=errores>:message</span>') !!}
                            </td>

                            <td>
                                 <label>Numero Exterior:</label>
                            </td>

                            <td>
                                  <input type="text" name="NumeroExterior" class="form-control infoemprendedor" value="{{ old('NumeroExterior') }}">
                                   {!! $errors->first('NumeroExterior', '<span class=errores>:message</span>') !!}
                            </td>

                        </tr>



                        <tr>
                             <td>
                                <label>Numero Interior:</label>
                            </td>

                            <td>
                                <input type="text" name="NumeroInterior" class="form-control infoemprendedor" value="{{ old('NumeroInterior') }}">
                        
                            </td>

                            <td>
                                 <label>Estado:</label>
                            </td>

                            <td>
                                  <input type="text" name="Ciudad" class="form-control infoemprendedor" value="{{ old('Ciudad') }}">
                                  {!! $errors->first('Ciudad', '<span class=errores>:message</span>') !!}
                            </td>
                            
                        </tr>

                        <tr>
                             

                            <td>
                                <label>Municipio:</label>
                            </td>

                            <td>
                                <input type="text" name="Municipio" class="form-control infoemprendedor" value="{{ old('Municipio') }}">
                                   {!! $errors->first('Municipio', '<span class=errores>:message</span>') !!}
                            </td>

                            <td>
                                <label>Colonia:</label>
                            </td>

                            <td>
                                 <input type="text" name="Colonia" class="form-control infoemprendedor" value="{{ old('Colonia') }}">
                                  {!! $errors->first('Colonia', '<span class=errores>:message</span>') !!}
                            </td>
                            
                        </tr>

                        <tr>
                            <td colspan="1">
                                <label>Codigo Postal:</label>
                            </td>

                            <td colspan="3">
                                <input type="text" name="CodigoPostal" class="form-control infoemprendedor col-sm-5" value="{{ old('CodigoPostal') }}">
                                {!! $errors->first('CodigoPostal', '<span class=errores>:message</span>') !!}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Telefono Celular:</label>
                            </td>

                            <td>
                                 <input type="text" name="TelefonoCel" class="form-control infoemprendedor" value="{{ old('TelefonoCel') }}">
                
                            </td>

                            <td>
                                 <label>Telefono de Casa:</label>
                            </td>

                            <td>
                                  <input type="text" name="TelefonoCasa" class="form-control infoemprendedor" value="{{ old('TelefonoCasa') }}">
                                   
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1">
                                <label>Telefono de Oficina:</label>
                            </td>

                            <td colspan="3">
                                <input type="text" name="TelefonoOfi" class="form-control infoemprendedor col-sm-5" value="{{ old('TelefonoOfi') }}">
                                
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Correo Eletronico:</label>
                            </td>

                            <td>
                                 <input type="email" name="Correo" class="form-control infoemprendedor" value="{{ old('Correo') }}">
                                  {!! $errors->first('Correo', '<span class=errores>:message</span>') !!}
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1">
                                <label>Escolaridad</label>
                            </td>

                            <td colspan="3">
                                <div class="form-group ">
                                    <select class="form-control col-sm-5" name="Escolaridad" value="" >
                                        <option value="">Selecciona una escolaridad</option>
                                        <option value="Primaria">Primaria</option>
                                        <option value="Secundaria">Secundaria</option>
                                        <option value="Preparatoria/Bachillerato">Preparatoria/Bachillerato</option>
                                        <option value="Carrera Tecnica">Carrera Tecnica</option>
                                        <option value="Licenciatura">Licenciatura</option>
                                        <option value="Maestria">Maestria</option>
                                        <option value="Doctorado">Doctorado</option>
                                    </select>
                                </div>
                                  {!! $errors->first('Escolaridad', '<span class=errores>:message</span>') !!}
                            </td>
                        </tr>

                         <tr>
                            <td>
                                <label>CURP:</label>
                            </td>

                            <td>
                                 <input type="text" name="CURP" class="form-control infoemprendedor" value="{{ old('CURP') }}">
                                 {!! $errors->first('CURP', '<span class=errores>:message</span>') !!}
                            </td>

                            <td>
                                <label>INE:</label>
                            </td>

                            <td>
                                 <input type="text" name="INE" class="form-control infoemprendedor" value="{{ old('INE') }}">
                                 {!! $errors->first('INE', '<span class=errores>:message</span>') !!}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Tipo de empresa</label>
                            </td>

                            <td>
                                <div class="form-group">
                                    <select class="form-control" name="TipoEmpresa" value="">
                                        <option value="">Selecciona una opcion</option>
                                        <option value="Sociedad en nombre colectivo">Sociedad en nombre colectivo</option>
                                        <option value="Sociedad en comandita simple">Sociedad en comandita simple</option>
                                        <option value="Sociedad en comandita por acciones">Sociedad en comandita por acciones</option>
                                        <option value="Sociedad en responsabilidad limitada">Sociedad en responsabilidad limitada</option>
                                        <option value="Sociedad anonima">Sociedad anonima</option>
                                        <option value="Sociedad coorporativa">Sociedad coorporativa</option>
                                        <option value="Sociedad civil">Sociedad civil</option>
                                    </select>
                                </div>
                                {!! $errors->first('TipoEmpresa', '<span class=errores>:message</span>') !!}
                            </td>

                            <td>
                                <label>Otra:</label>
                            </td>

                            <td>
                                 <input type="text" name="TipoOtra" class="form-control infoemprendedor" value="{{ old('TipoOtra') }}">
                            </td>

                        </tr>
                        <tr>
                            <td colspan="1">
                                <label>Tipo de Persona:</label>
                            </td>

                            <td colspan="3">
                                  <div class="form-group ">
                                    <select class="form-control col-sm-5" id="TipoPersona" name="TipoPersona" value="">
                                        <option>Selecciona una opcion</option>
                                        <option value="1">Persona Fisica</option>
                                        <option value="2">Persona Moral</option>
                                    </select>
                                    {!! $errors->first('TipoPersona', '<span class=errores>:message</span>') !!}                                   
                                </div>
                            </td> 
                        </tr>

                    </tbody>
                </table>
                


                <div id="persona-fisica" style="display: none;">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td colspan="4">
                                    <h4>Persona Fisica</h4>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label>RFC:</label>
                                </td>

                                <td>
                                    <input type="text" name="RFC" class="form-control infoemprendedor col-sm-5" value="{{ old('RFC') }}">
                                </td>
                            </tr>                    
                        </tbody>
                    </table>
                </div>

                   <div id="persona-moral" style="display: none;">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td colspan="4">
                                    <h4>Persona Moral</h4>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label>Razon Social:</label>
                                </td>
                                
                                <td>
                                    <input type="text" name="RazonSocial" class="form-control infoemprendedor" value="{{ old('RazonSocial') }}">
                                </td>

                                <td>
                                    <label>RFC:</label>
                                </td>

                                <td>
                                    <input type="text" name="RFCM"  class="form-control infoemprendedor" value="{{ old('RFCM') }}">
                                </td>

                            </tr>

                            <tr>
                                <td colspan="1">
                                    <label>Objecto Social</label>
                                </td>

                                <td colspan="3">
                                    <input type="text" name="ObjetoSocial" class="form-control infoemprendedor col-sm-5" value="">
                                </td>
                            </tr>

                               
                   
                            </tbody>
                        </table>
                    </div>

                    <table  class="table" id="integrantes">
                        <thead>
                            <tr style=" text-align:center;">
                                <td colspan="2">
                                    <h3>Ingrese Colaboradores</h3>
                                </td>
                                <td colspan="1"> 
                                    <button type="button" class="btn btn-outline-primary" id="btnNuevointegrante">Agregar</button>
                                </td>

                                <td colspan="1"> 
                                    <button type="button" class="btn btn-outline-primary" id="btnEliminarintegrante">Eliminar</button>
                                </td>
                            </tr>
                      
                            <tr style=" text-align:center;">
        
                                <th>
                                    <label>Apellido Paterno:</label>
                                </th>

                                <th>
                                    <label>Apellido Materno:</label>
                                </th>

                                <th>
                                    <label>Nombre:</label>
                                </th>

                                <th>
                                    <label>CURP:</label>
                                </th>
                            </tr>
                        </thead>

                    </table>
            

                
                    <table class="table">
                        <tr style=" text-align:center;">
                            @if (empty($empre))
                            <td>
                                <input type="submit" value="Guardar" class="btn btn-outline-primary">
                            </td>
                            @endif

                            <td>
                                <div class="container">
                                    <div class="row justify-content-md-center">
                                        <div class="col-4 mb-5">
                                            <a href="{{ route('Registro.index') }}">
                                                <span class="btn btn-outline-primary">Descargar</span> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                               
                            </td>
                        </tr>
                    </table>
                 
                </form>
            </div>
        </div>

       
@endsection
        


