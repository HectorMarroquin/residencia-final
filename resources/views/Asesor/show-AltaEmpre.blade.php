@extends('asesor')
 
@section('contenido')

<div class="container"> 
    
    <div class="row">
        <div class="col">
             <div class="row justify-content-center mb-2" style="background: #e8e8e8">
        <div class="row">
            <div class=" col-md-12">
                <h4>{{ $emprendedor->Nombre }}</h4>              
            </div>
        </div>

    </div>
    

    <div class="row justify-content-center">
        <div class="form-group col-md-10">
            <label for="inputName1">Nombre Completo</label>
            <input disabled="true" type="text" name="Nombre" class="form-control" id="inputName1" value="{{$emprendedor->Nombre }}">
        </div>
    </div>
    
    <div class="row justify-content-md-center">
        <div class="form-group col-md-5">
            <label for="inputName1">Apellido Paterno</label>
            <input disabled="true" type="text" name="ApellidoP" class="form-control" id="inputName1" value="{{ $emprendedor->ApellidoP }}">
         </div>
           
         <div class="form-group col-md-5">
            <label for="inputApellido">Apellido Materno</label>
            <input disabled="true" type="text" name="ApellidoM" class="form-control" id="inputApellido" value="{{ $emprendedor->ApellidoM }}">
         </div>
    </div>
    
    <div class="row justify-content-md-center">
        <div class="form-group col-md-5">
            <label>Fecha de Nacimiento</label>
             <input disabled="true" type="date" name="FechaNaci" class="form-control infoemprendedor" 
             value="{{$emprendedor->FechaNaci}}">
            
        </div>
    
        <div class="form-group col-md-5">
            <label>Edad</label>
            <input disabled="true" type="text" name="Edad"  class="form-control " value="{{$emprendedor->Edad}}">
        </div>
     </div>
    
     <div class="row justify-content-md-center">
         <div class="form-group col-md-5">           
                <label>Sexo</label>
                            <input disabled="true" type="email" name="Sexo" class="form-control" id="inputEmail" value="{{ $emprendedor->Sexo }}">
                        </div>
         <div class="form-group col-md-5">
                              <label for="inputCivil">Estado civil</label>
                              <input disabled="true" id="inputCivil" name="EstadoCivil" class="form-control" value="{{ $emprendedor->EstadoCivil }}"/>


                         </div>                

     
    </div>

      <div class="row justify-content-md-center mt">
        <div class="form-group col-md-5">           
            <label>Direccion</label>
            <input disabled="true" type="email" name="direccion" class="form-control" value="{{ $emprendedor->Direccion }}">
        </div>

        <div class="form-group col-md-5">
            <label for="inputContra1">Numero Exterior</label>
            <input disabled="true" type="text" name="NumeroExterior" class="form-control infoemprendedor" value="{{$emprendedor->NumeroExterior}}">           
        </div>
                  
     </div>

    <div class="row justify-content-md-center mt">
        <div class="form-group col-md-5">           
             <label>Numero Interior</label>
             <input disabled="true" type="text" name="NumeroInterior" class="form-control infoemprendedor" value="{{$emprendedor->NumeroInterior}}">
        </div>

        <div class="form-group col-md-5">
            <label for="inputColonia">Colonia</label>
               <input  disabled="true" type="text" name="Colonia" class="form-control" id="inputColonia" value="{{ $emprendedor->Colonia }}">
        </div>
                  
    </div>

    <div class="row justify-content-md-center">
        <div class="form-group col-md-5">
           <label for="inputColonia">Ciudad</label>
           <input  disabled="true" type="text" name="Colonia" class="form-control" id="inputColonia" value="{{ $emprendedor->Ciudad }}">
                    
        </div>
        
        <div class="form-group col-md-5">
            <label for="inputRFC">Municipio</label>
            <input disabled="true" type="text" name="RFC" class="form-control" id="inputRFC" value="{{ $emprendedor->Municipio }}">
                    
        </div>
    </div>

    
    <div class="row justify-content-md-center">
        <div class="form-group col-md-5">
            <label for="inputCP">Codigo Postal</label>
            <input disabled="true" type="text" name="CP" class="form-control" id="inputCP" value="{{ $emprendedor->CodigoPostal }}">
                    
        </div>
        
        <div class="form-group col-md-5">
            <label for="inputRFC">Telefono Celular</label>
            <input disabled="true" type="text" name="RFC" class="form-control" id="inputRFC" value="{{ $emprendedor->TelefonoCel }}">
        </div>

    </div>
    
    <div class="row justify-content-md-center">
        <div class="form-group col-md-5">
            <label for="inputEscola">Telefono de Oficina</label>
            <input disabled="true" type="text" name="Escolaridad" class="form-control" id="inputRFC" value="{{ $emprendedor->TelefonoOfi }}">
                     
        </div>
        
        <div class="form-group col-md-5">
            <label for="inputCURP">Telefono de Casa</label>
            <input disabled="true" type="text" name="CURP" class="form-control" id="inputCURP" value="{{ $emprendedor->TelefonoCasa }}">
        </div>
    </div>
    
    <div class="row justify-content-md-center">
        <div class="form-group col-md-5">
            <label for="inputTel">Correo Electronico</label>
            <input disabled="true" type="text" name="Telefono" class="form-control" id="inputTel" value="{{ $emprendedor->Correo }}">
                         
        </div>

        <div class="form-group col-md-5">
            <label for="inputFecha">Escolaridad</label>
            <input disabled="true" type="text" name="FechaNacimiento" class="form-control" id="inputFecha" value="{{ $emprendedor->Escolaridad }}">
                          
        </div>
    </div>

                <div class="row justify-content-md-center">
                        <div class="form-group col-md-5">
                              <label for="inputCivil">INE</label>
                              <input disabled="true" id="inputCivil" name="EstadoCivil" class="form-control" value="{{ $emprendedor->INE }}"/>


                        
             </div>

                            <div class="form-group col-md-5">
                              <label for="inputEmail">Curp</label>
                            <input disabled="true" type="text" name="Correo" class="form-control" id="inputEmail" value="{{ $emprendedor->CURP}}">
                          
                         </div>
            </div>

                <div class="row justify-content-md-center">
                        <div class="form-group col-md-5">
                              <label for="inputCivil">Tipo de Empresa</label>
                              <input disabled="true" id="inputCivil" name="EstadoCivil" class="form-control" value="{{ $emprendedor->TipoEmpresa }}"/>


                         </div>
                            <div class="form-group col-md-5">
                              <label for="inputEmail">Otra</label>
                            <input disabled="true" type="text" name="Correo" class="form-control" id="inputEmail" value="{{ $emprendedor->TipoOtra}}">
                          
                         </div>
            </div>

    
              <div class="row justify-content-md-center">
                        <div class="form-group col-md-5">
                              <label for="inputCivil">Tipo de Persona</label>
                              <input disabled="true" id="inputCivil" name="EstadoCivil" class="form-control" value="{{ $emprendedor->TipoPersona }}"/>                      
                        </div>
    
    @if($emprendedor->TipoPersona==='Persona Moral') 
                       
                       <div class="form-group col-md-5">
                              <label for="inputCivil">RFCM</label>
                              <input disabled="true" id="inputCivil" name="EstadoCivil" class="form-control" value="{{ $emprendedor->RFCM }}"/>                      
                        </div>  
            </div>            

          

            <div class="row justify-content-md-center">
                        <div class="form-group col-md-5">
                              <label for="inputCivil">Razon social</label>
                              <input disabled="true" id="inputCivil" name="EstadoCivil" class="form-control" value="{{ $emprendedor->RazonSocial }}"/>


                         </div>
                            <div class="form-group col-md-5">
                              <label for="inputEmail">Objetivo Social</label>
                            <input disabled="true" type="text" name="Correo" class="form-control" id="inputEmail" value="{{ $emprendedor->ObjetivoSocial}}">
                          
                         </div>
            </div>

            @else
                     
                        
                            <div class="form-group col-md-5">
                              <label for="inputEmail">RFC</label>
                            <input disabled="true" type="text" name="Correo" class="form-control" id="inputEmail" value="{{ $emprendedor->RFC}}">
                          
                         </div>
                    
            @endif 

 
    
        </div>
    </div> 
    </div>     
   
   <div class="row  justify-content-md-center">
        <div class="col-10">
     <table class="table table-bordered table-hover table-reponsive mt-4">
        
        <h4>Tabla de Colaboradores</h4>
        <thead class="table-info">
          <th>Nombre Completo</th>
          <th>Curp</th>
        </thead>

        <tbody>

          @forelse($colaborador as $colaboradores)
          
            <tr><td>{{$colaboradores->NombreC}} {{ $colaboradores->ApellidoPC }} {{ $colaboradores->ApellidoMC }}</td>
            <td>{{ $colaboradores->CURPC }}</td></tr>
           
             @empty
          <td colspan="6" style="text-align: center;"><h4>No Hay Colaboradores Registrados</h4></td>
          @endforelse
               
        </tbody>

     </table>
  </div>
   </div>

   <div class="form-group row">
        <div class="col-12 text-center">
            <div class="row justify-content-center">
                 <div class="col-12 col-sm-9 col-md-4">
                                 <a type="button" class="btn btn-dark" href="#">
                            <i class="fas fa-file-download"> Descargar como documento PDF</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
  
   </div>


  
@endsection
        


