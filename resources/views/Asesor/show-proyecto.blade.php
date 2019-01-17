@extends('asesor')

@section('contenido')

<div class="row">
  <div class="col-4">
    <div class="row">
      <div class="col">
     <table class="table table-bordered table-hover table-reponsive mt-5">
         
        <thead>
          <th>Nombre del proyecto</th>
        </thead>

        <tbody>
          <td>{{ $ids->NombreProd }}</td>
        </tbody>

     </table>

      </div>
     </div>

     <div class="row">
       <div class="col">
         <form>
          <select name="cars" class="custom-select">
            <option selected>Datos Generales Del Proyecto</option>
            <option value="volvo"><a href="{{ route('infoAlta') }}">Informacion de Alta de Proyecto</a></option>
          </select>
      </form>
       </div>
     </div>
  </div>

   <div class="col-8">
     <table class="table table-bordered table-hover table-reponsive mt-4">
        
        <h4>Tabla de Colaboradores</h4>
        <thead>
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

<div class="row">
  <div class="col">
    <ul class="nav nav-tabs mt-5 nav-justified">
      <li class="nav-item">
        <a href="#tab1" class="nav-link active" data-toggle="tab">Fase-1</a>
      </li>
      <li class="nav-item">
          <a id="ea" href="#tab2" class="nav-link " data-toggle="tab">Fase-2</a>
      </li>
      <li class="nav-item">
        <a href="#tab3" class="nav-link" data-toggle="tab">Fase-3</a>  
      </li>
        <li class="nav-item">
        <a id="myDIV" href="#tab4" class="nav-link " data-toggle="tab">Fase-4</a>
      </li>
        <li class="nav-item">
        <a href="#tab5" class="nav-link " data-toggle="tab">Fase-5</a>
      </li>
  </ul>

  <div class="tab-content">
          <div class="tab-pane active" id="tab1" role="tabpanel">
            <h3 class="mt-3">Panel 1</h3>

            <div class="row">
              <div class="col-4">
                <div class="row">
                  <div class="col">
                     <table class="table table-bordered table-hover table-reponsive">
                         
                        <thead>
                          <th>Listado de Actividades de la Fase-1</th>
                        </thead>

                        <tbody>
                          <tbody>

                              @forelse($actividades as $actividad)
                                @if($actividad->fase_id === 1)
                                <tr><td>{{$actividad->Nombre}}</td>
                                 @endif                             
                                 @empty
                              <td colspan="6" style="text-align: center;"><h4>No Hay Colaboradores Registrados</h4></td>
                              @endforelse
                                   
       
                        </tbody>

                     </table>

                  </div>
                  </div>
              </div>

              <div class="col-8">
                <table class="table table-bordered table-hover table-reponsive">
              <thead>
                <th>Entregas</th>
                <th>Retroalimentar</th>
              </thead>
              <tbody>
                <tr>
                     
                <td>
                    @forelse($files as $file)
                     @if( ($file->NumeroEntrega===1) && ($file->fase_id===1) ) 
                          <a type="button" class="btn btn-primary" href="{{ route('projects.edit', $file->id) }}">
                            <i class="fas fa-file-download"> Descargar Archivo</i></a>

                            <p>Entrega Numero {{ $file->NumeroEntrega }}</p>    
                       @endif          
                                                 
                           @empty
                        <td colspan="6" style="text-align: center;"><h4>No Hay Archivos</h4></td>
                        @endforelse
                </td>
                 <td> 
            

                  <form> 
                  <div class="form-group row">
                        <div class="col-12 col-md-10 mb-3">
                          <label for="exampleFormControlFile1">Elige un documento para enviar</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                                                
                                                
                        <div class="col-12 col-md-2 my-2">
                          <span></span>
                            <button type="button" class="btn btn-primary xs" >enviar</button>
                          
                        </div>
                    </div>
                  </form>


                 </td> 
                </tr>
              
                <tr>
                     
                 
                  <td>
                       @forelse($files as $file)
                     @if( ($file->NumeroEntrega===2) && ($file->fase_id===1) ) 
                          <a type="button" class="btn btn-primary" href="{{ route('projects.edit', $file->id) }}">
                            <i class="fas fa-file-download"> Descargar Archivo</i></a>
                            <p>Entrega Numero {{ $file->NumeroEntrega }}</p>       
                       @endif          
                                                 
                           @empty
                        <td colspan="6" style="text-align: center;"><h4>No Hay Archivos</h4></td>
                        @endforelse
                                         
                  </td>

                 <td> 
                   @forelse($files as $file)
                     @if( ($file->NumeroEntrega===2) && ($file->fase_id===1) ) 
                          <form method="POST" action="{{ route('projects.update', $file->id) }}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                             {!! method_field('PUT') !!} 
  
                          <div class="form-group row">
                              <div class="col-12 col-md-10 mb-3 form-group">
                                  <label for="fileEnvio">Elige un documento para enviar</label>
                                <input type="file" name="file" class="form-control-file" id="fileEnvio">
                                </div> 

                                 <div class="col-12 col-md-2 my-2 form-group">

                                  <button type="submit" class="btn btn-primary xs" >enviar</button>
                                   </div>
                              </div>
                            </form>            
                       @endif          
                                                 
                           @empty
                        <td colspan="6" style="text-align: center;"><h4>No Hay Archivos</h4></td>
                        @endforelse               
                                  
                       
                          
                        
                   
                 </td> 
                </tr>
  
                   <tr>
                     
                <td>
                     @forelse($files as $file)
                     @if( ($file->NumeroEntrega===3) && ($file->fase_id===1) ) 
                          <a type="button" class="btn btn-primary" href="{{ route('projects.edit', $file->id) }}">
                            <i class="fas fa-file-download">Descargar Archivo</i></a>
                            <p>Entrega Numero {{ $file->NumeroEntrega }} Esta es la Ultima Entrega</p>       
                       @endif          
                                                 
                           @empty
                        <td colspan="6" style="text-align: center;"><h4>No Hay Archivos</h4></td>
                        @endforelse
                </td>
                 <td> 
                    <div class="form-group row justify-content-center">
                        <div class="col-12 col-md-2 mb-3">
                             <button type="button" class="btn btn-success xs" >Aprobar</button>
                        </div>
                                                
                        <div class="col-12 col-md-2 mb-3">
                            <button type="button" class="btn btn-danger xs" >Reprobar</button>
                          
                        </div>
                       </div>
               
                 </td> 
                </tr>
                
              </tbody>
            </table>
              </div>
            </div>
                        


            
          </div>

          <div class="tab-pane" id="tab2" role="tabpanel">
            <h3 class="mt-3">Panel 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.panel-2</p>
          </div>
          <div class="tab-pane" id="tab3" role="tabpanel">
            <h3 class="mt-3">Panel 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.panel-3</p>
          </div>
            <div class="tab-pane" id="tab4" role="tabpanel">
            <h3 class="mt-3">Panel 4</h3>
            <p></p>
          </div>
            <div class="tab-pane" id="tab5" role="tabpanel">
            <h3 class="mt-3">Panel 5</h3>
            <p></p>
          </div>
        </div>
</div>
</div>

@stop