@extends('asesor')

@section('contenido')

<div class="row">
  <div class="col-4">
    <div class="row">
      <div class="col">
     <table class="table table-bordered table-hover table-reponsive mt-5">
         
        <thead class="table-info">
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

<div class="row">
  <div class="col">
    <ul class="nav nav-tabs mt-5 nav-justified border table-dark ">
      <li class="nav-item">
        <a href="#tab1" class="nav-link active btn-outline-info" data-toggle="tab">Fase-1</a>
      </li>
      <li class="nav-item">
          <a id="ea" href="#tab2" class="nav-link btn-outline-info" data-toggle="tab">Fase-2</a>
      </li>
      <li class="nav-item">
        <a href="#tab3" class="nav-link btn-outline-info" data-toggle="tab">Fase-3</a>  
      </li>
        <li class="nav-item">
        <a id="myDIV" href="#tab4" class="nav-link btn-outline-info" data-toggle="tab">Fase-4</a>
      </li>
        <li class="nav-item">
        <a href="#tab5" class="nav-link btn-outline-info" data-toggle="tab">Fase-5</a>
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
                         
                        <thead class="table-info">
                          <th>Listado de Actividades de la Fase-1</th>
                        </thead>

                          <tbody>

                              @forelse($actividades as $actividad)
                                @if($actividad->fase_id === 1)
                                <tr><td>{{$actividad->Nombre}}</td>
                                 @endif                             
                                 @empty
                              <td colspan="6" style="text-align: center;"><h4>No Hay Actividades Registrados</h4></td>
                              @endforelse
                                   
       
                        </tbody>

                     </table>

                  </div>
                  </div>
              </div>

              <div class="col-8">
                <table class="table table-bordered table-hover table-reponsive">
              <thead class="table-info">
                <th>Entregas</th>
                <th>Retroalimentar</th>
              </thead>
              <tbody>
                <tr>
                     
                <td>
                    @forelse($files as $file)
                     @if( ($file->NumeroEntrega===1) && ($file->fase_id===1) ) 
                          <a type="button" class="btn btn-dark" href="{{ route('projects.edit', $file->id) }}">
                            <i class="fas fa-file-download"> Descargar Archivo</i></a>

                            <p>Entrega Numero {{ $file->NumeroEntrega }}</p>    
                       @endif          
                                                 
                           @empty
                        <td colspan="6" style="text-align: center;"><h4>No Hay Archivos</h4></td>
                        @endforelse
                </td>
                 <td> 
                   @forelse($files as $file)
                     @if( ($file->NumeroEntrega===1) && ($file->fase_id===1) ) 
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
                     @if( ($file->NumeroEntrega===2) && ($file->fase_id===1) ) 
                          <a type="button" class="btn btn-dark" href="{{ route('projects.edit', $file->id) }}">
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
                             No Hay Archivos
                        @endforelse

                     @if(!empty($files))
                        Aun No Hay Entregas
                      @endif     
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
             
            <div class="row">
              <div class="col-4">
                <div class="row">
                  <div class="col">
                     <table class="table table-bordered table-hover table-reponsive">
                         
                        <thead class="table-active">
                          <th>Listado de Actividades de la Fase-2</th>
                        </thead>

                          <tbody>

                              @forelse($actividades as $actividad)
                                @if($actividad->fase_id === 2)
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
              <thead class="table-active">
                <th>Entregas</th>
                <th>Retroalimentar</th>
              </thead>
              <tbody>
                <tr>
                     
                <td>
                    @forelse($files as $file)
                     @if( ($file->NumeroEntrega===1) && ($file->fase_id===2) ) 
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
                     @if( ($file->NumeroEntrega===1) && ($file->fase_id===2) ) 
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
                     @if( ($file->NumeroEntrega===2) && ($file->fase_id===2) ) 
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
                     @if( ($file->NumeroEntrega===2) && ($file->fase_id===2) ) 
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
                     @if( ($file->NumeroEntrega===3) && ($file->fase_id===2) ) 
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
        


          <div class="tab-pane" id="tab3" role="tabpanel">
            <h3 class="mt-3">Panel 3</h3>
            <div class="row">
              <div class="col-4">
                <div class="row">
                  <div class="col">
                     <table class="table table-bordered table-hover table-reponsive">
                         
                        <thead class="table-active">
                          <th>Listado de Actividades de la Fase-3</th>
                        </thead>

                          <tbody>

                              @forelse($actividades as $actividad)
                                @if($actividad->fase_id === 3)
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
                  <thead class="table-active">
                      <th>Entregas</th>
                      <th>Retroalimentar</th>
                  </thead>
        
                  <tbody>
                     <tr>
                           
                      <td>
                          @forelse($files as $file)
                           @if( ($file->NumeroEntrega===1) && ($file->fase_id===3) ) 
                                <a type="button" class="btn btn-primary" href="{{ route('projects.edit', $file->id) }}">
                                  <i class="fas fa-file-download"> Descargar Archivo</i></a>

                                  <p>Entrega Numero {{ $file->NumeroEntrega }}</p>    
                             @endif          
                                                       
                                 @empty
                              <span colspan="6" style="text-align: center;"><h4>No Hay Archivos</h4></span>
                              @endforelse
                      </td>
                       
                             <td> 
                               @forelse($files as $file)
                                 @if( ($file->NumeroEntrega===1) && ($file->fase_id===3) ) 
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
                                    <span colspan="6" style="text-align: center;"><h4>No Hay Archivos</h4></span>
                                    @endforelse               
                                               
                              </td>  
                       </tr>

                        <tr>
                     
                          <td>
                              @forelse($files as $file)
                                 @if( ($file->NumeroEntrega===2) && ($file->fase_id===3) ) 
                                   <a type="button" class="btn btn-primary" href="{{ route('projects.edit', $file->id) }}">
                                    <i class="fas fa-file-download"> Descargar Archivo</i></a>
                                     <p>Entrega Numero {{ $file->NumeroEntrega }}</p>       
                               @endif          
                                                         
                                 @empty
                                <span colspan="6" style="text-align: center;"><p>No Hay Archivos</p></span>
                                @endforelse
                                                 
                            </td>

                             <td> 
                               @forelse($files as $file)
                                 @if( ($file->NumeroEntrega===2) && ($file->fase_id===3) ) 
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
                                    <span colspan="6" style="text-align: center;"><h4>No Hay Archivos</h4></span>
                                    @endforelse               
                                               
                              </td> 
                          </tr>

                             <tr>
                     
                                <td>
                                     @forelse($files as $file)
                                     @if( ($file->NumeroEntrega===3) && ($file->fase_id===3) ) 
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


            <div class="tab-pane" id="tab4" role="tabpanel">
            <h3 class="mt-3">Panel 4</h3>
               <div class="row">
              <div class="col-4">
                <div class="row">
                  <div class="col">
                     <table class="table table-bordered table-hover table-reponsive">
                         
                        <thead class="table-active">
                          <th>Listado de Actividades de la Fase-4</th>
                        </thead>

                          <tbody>

                              @forelse($actividades as $actividad)
                                @if($actividad->fase_id === 4)
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
                  <thead class="table-active">
                      <th>Entregas</th>
                      <th>Retroalimentar</th>
                  </thead>
        
                  <tbody>
                     <tr>
                           
                      <td>
                          @forelse($files as $file)
                           @if( ($file->NumeroEntrega===1) && ($file->fase_id===4) ) 
                                <a type="button" class="btn btn-primary" href="{{ route('projects.edit', $file->id) }}">
                                  <i class="fas fa-file-download"> Descargar Archivo</i></a>

                                  <p>Entrega Numero {{ $file->NumeroEntrega }}</p>    
                             @endif          
                                                       
                                 @empty
                              <span colspan="6" style="text-align: center;"><h4>No Hay Archivos</h4></span>
                              @endforelse
                      </td>
                       
                             <td> 
                               @forelse($files as $file)
                                 @if( ($file->NumeroEntrega===1) && ($file->fase_id===4) ) 
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
                                    <span colspan="6" style="text-align: center;"><h4>No Hay Archivos</h4></span>
                                    @endforelse               
                                               
                              </td>  
                       </tr>

                        <tr>
                     
                          <td>
                              @forelse($files as $file)
                                 @if( ($file->NumeroEntrega===2) && ($file->fase_id===4) ) 
                                   <a type="button" class="btn btn-primary" href="{{ route('projects.edit', $file->id) }}">
                                    <i class="fas fa-file-download"> Descargar Archivo</i></a>
                                     <p>Entrega Numero {{ $file->NumeroEntrega }}</p>       
                               @endif          
                                                         
                                 @empty
                                <span colspan="6" style="text-align: center;"><p>No Hay Archivos</p></span>
                                @endforelse
                                                 
                            </td>

                             <td> 
                               @forelse($files as $file)
                                 @if( ($file->NumeroEntrega===2) && ($file->fase_id===4) ) 
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
                                    <span colspan="6" style="text-align: center;"><h4>No Hay Archivos</h4></span>
                                    @endforelse               
                                               
                              </td> 
                          </tr>

                             <tr>
                     
                                <td>
                                     @forelse($files as $file)
                                     @if( ($file->NumeroEntrega===3) && ($file->fase_id===4) ) 
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
            <p></p>
          </div>









            <div class="tab-pane" id="tab5" role="tabpanel">
            <h3 class="mt-3">Panel 5</h3>
             <div class="row">
              <div class="col-4">
                <div class="row">
                  <div class="col">
                     <table class="table table-bordered table-hover table-reponsive">
                         
                        <thead class="table-active">
                          <th>Listado de Actividades de la Fase-5</th>
                        </thead>

                          <tbody>

                              @forelse($actividades as $actividad)
                                @if($actividad->fase_id === 5)
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
                  <thead class="table-active">
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
                              <span colspan="6" style="text-align: center;"><h4>No Hay Archivos</h4></span>
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
                                    <span colspan="6" style="text-align: center;"><h4>No Hay Archivos</h4></span>
                                    @endforelse               
                                               
                              </td>  
                       </tr>

                        <tr>
                     
                          <td>
                              @forelse($files as $file)
                                 @if( ($file->NumeroEntrega===1) && ($file->fase_id===1) ) 
                                   <a type="button" class="btn btn-primary" href="{{ route('projects.edit', $file->id) }}">
                                    <i class="fas fa-file-download"> Descargar Archivo</i></a>
                                     <p>Entrega Numero {{ $file->NumeroEntrega }}</p>       
                               @endif          
                                                         
                                 @empty
                                <span colspan="6" style="text-align: center;"><p>No Hay Archivos</p></span>
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
                                    <span colspan="6" style="text-align: center;"><h4>No Hay Archivos</h4></span>
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
            <p></p>
          </div>
        </div>
</div>
</div>

@stop