@extends('asesor')

@section('contenido')

<div class="row">
  <div class="col">
    <div class="row">
      <div class="col-12 col-md-4">
        <table class="table table-bordered table-hover table-reponsive mt-5">
         
        <thead class="table-info">
          <th>Nombre del proyecto</th>
        </thead>

        <tbody>
          <td>{{ $proyecto->NombreProd }}</td>
        </tbody>

        </table>
      </div>

      <div class="col-12 col-md-8">
        <table class="table table-bordered table-hover table-reponsive mt-4">
         <h4>Tabla de Colaboradores</h4>
          <thead class="table-info">
            <th>Nombre Completo</th>
            <th>Curp</th>
          </thead>

        <tbody>

          @forelse($proyecto->emprendedor->colaboradores as $colaborador)
          
            <tr><td>{{$colaborador->NombreC}} {{ $colaborador->ApellidoPC }} {{ $colaborador->ApellidoMC }}</td>
            <td>{{ $colaborador->CURPC }}</td></tr>
           
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
            <a href="#tab4" class="nav-link btn-outline-info" data-toggle="tab">Fase-4</a>
          </li>
          <li class="nav-item">
            <a href="#tab5" class="nav-link btn-outline-info" data-toggle="tab">Fase-5</a>
          </li>
       </ul>
      </div>
    </div>

       <div class="tab-content row">
         <div class="tab-pane active col" id="tab1" role="tabpanel">
            <h3 class="mt-3">Fase-1</h3>
            <div class="row">
                <div class="col-12 col-md-4">
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

                <div class="col-12 col-md-8">
                   <table class="table table-bordered table-hover table-reponsive">
                      <thead class="table-info">
                         <th>Entregas</th>
                         <th>Retroalimentar</th>
                      </thead>
      
                      <tbody>
                         @forelse($files as $file)
                            @if($file->fase_id===1) 
                              <tr>
                                  <td>
                                    <div class="row justify-content-center">
                                      <div class="col text-center">
                                          <a type="button" id="{{ $file->id }}" class="btn btn-dark" href="{{ route('projects.edit', $file->id) }}">
                                          <i class="fas fa-file-download"> Descargar Archivo</i></a>
                                            <p>Entrega Numero {{ $file->NumeroEntrega }} de 3</p>
                                  </td>                      
                                      </div>
                                    </div>
                                  
                                      
                                  <td>

                                   @if(empty($file->Comentario))  
                                      <form method="POST" action="{{ route('projects.update', $file->id) }}" enctype="multipart/form-data"> @csrf {!! method_field('PUT') !!} 

                                        <div class="form-group row">
                                           <div class="col-12 text-center">
                                          <div class="row justify-content-center" id="{{ $file->id }}">
                                             <div class="col-12 text-center">
                                              <label for="fileEnvio">Elije un archivo word para enviar</label>
                                              <input type="file" name="file" class="form-control-file" id="fileEnvio">
                                            </div> 
                                          </div>
                                            
                                          <div class="row justify-content-center">
                                            <div class="col-12 col-sm-7 col-md-5 mt-3">
                                              <button type="submit" class="btn btn-primary btn-block" type="submit">Enviar</button>
                                            </div>
                                          </div>
                                         </div>

                                                                        
                                        </div>

                                      </form>
                                      @elseif(!empty($file->Comentario))
                                     
                                      <div class="row justify-content-center">
                                        <div class="col text-center">
                                          <a type="button" class="btn btn-dark" href="{{ route('Archivo.edit', $file->id) }}">
                                          <i class="fas fa-file-download"> Descargar Archivo</i></a>
                                            <p>Revision enviada para la entrega {{ $file->NumeroEntrega }} de 3</p>
                                                      
                                       </div>
                                      </div>
                                          

                                    @endif  
                                  </td>
                              </tr>
                             @endif                                  
                         @empty
                           <td style="text-align: center;"><h4>No Hay Archivos</h4></td>
                        @endforelse
                            
                      </tbody>
                    </table>
                    <div class="row justify-content-center">
                        <div class="col text-center">
                            <a type="button" class="btn btn-success" href="#">
                                <i class=""> Aprobar Fase</i></a>
                             <a type="button" class="btn btn-danger" href="#">
                                <i class=""> No aprobar Fase</i></a>   
                                 
                         </div>
                    </div>
 
                </div>
  
            </div>
            
         </div>

        <div class="tab-pane col" id="tab2" role="tabpanel">
            <h3 class="mt-3">Fase-2</h3>
              <div class="row">
                <div class="col-12 col-md-4">
                  <table class="table table-bordered table-hover table-reponsive">        
                     <thead class="table-info">
                       <th>Listado de Actividades de la Fase-2</th>
                     </thead>
                          
                     <tbody>
                        @forelse($actividades as $actividad)
                           @if($actividad->fase_id === 2)
                              <tr><td>{{$actividad->Nombre}}</td>
                            @endif                             
                         @empty
                           <td colspan="6" style="text-align: center;"><h4>No Hay Actividades Registrados</h4></td>
                         @endforelse                                  
                      </tbody>

                  </table>

                </div>

                <div class="col-12 col-md-8">
                   <table class="table table-bordered table-hover table-reponsive">
                      <thead class="table-info">
                         <th>Entregas</th>
                         <th>Retroalimentar</th>
                      </thead>
                      
                      <tbody>
                         @forelse($files as $file)
                            @if($file->fase_id===2) 
                              <tr>
                                  <td>
                                    <div class="row justify-content-center">
                                      <div class="col text-center">
                                          <a type="button" class="btn btn-dark" href="{{ route('projects.edit', $file->id) }}">
                                          <i class="fas fa-file-download"> Descargar Archivo</i></a>
                                            <p>Entrega Numero {{ $file->NumeroEntrega }} de 3</p>
                                  </td>                      
                                      </div>
                                    </div>
                                  
                                      
                                  <td>  
                                      <form method="POST" action="{{ route('projects.update', $file->id) }}" enctype="multipart/form-data"> @csrf {!! method_field('PUT') !!} 

                                        <div class="form-group row">
                                           <div class="col-12 text-center">
                                          <div class="row justify-content-center">
                                             <div class="col-12 text-center">
                                              <label for="fileEnvio">Elije un archivo word para enviar</label>
                                              <input type="file" name="file" class="form-control-file" id="fileEnvio">
                                            </div> 
                                          </div>
                                            
                                          <div class="row justify-content-center">
                                            <div class="col-12 col-sm-7 col-md-5 mt-3">
                                              <button type="submit" class="btn btn-primary btn-block" type="submit">Enviar</button>
                                            </div>
                                          </div>
                                         </div>

                                                                        
                                        </div>

                                      </form>
                                  </td>
                              </tr>
                             @elseif(!empty($file))
                              <tr>
                                   <td style="text-align: center;"> Aun no hay entrega </td>
                              </tr>           
                             @endif                                     
                         @empty
                           <td style="text-align: center;"><h4>No Hay Archivos</h4></td>
                        @endforelse
                            
                      </tbody>
                      
                    </table>
                </div>  
            </div>
            
        </div>
         

         <div class="tab-pane col" id="tab3" role="tabpanel">
            <h3 class="mt-3">Fase-3</h3>
            <div class="row">
                <div class="col-12 col-md-4">
                  <table class="table table-bordered table-hover table-reponsive">        
                     <thead class="table-info">
                       <th>Listado de Actividades de la Fase-3</th>
                     </thead>
                          
                     <tbody>
                        @forelse($actividades as $actividad)
                           @if($actividad->fase_id === 3)
                              <tr><td>{{$actividad->Nombre}}</td>
                            @endif                             
                         @empty
                           <td colspan="6" style="text-align: center;"><h4>No Hay Actividades Registrados</h4></td>
                         @endforelse                                  
                      </tbody>

                  </table>

                </div>

                <div class="col-12 col-md-8">
                   <table class="table table-bordered table-hover table-reponsive">
                      <thead class="table-info">
                         <th>Entregas</th>
                         <th>Retroalimentar</th>
                      </thead>
      
                      <tbody>
                         @forelse($files as $file)
                            @if($file->fase_id===3) 
                              <tr>
                                  <td>
                                    <div class="row justify-content-center">
                                      <div class="col text-center">
                                          <a type="button" class="btn btn-dark" href="{{ route('projects.edit', $file->id) }}">
                                          <i class="fas fa-file-download"> Descargar Archivo</i></a>
                                            <p>Entrega Numero {{ $file->NumeroEntrega }} de 3</p>
                                  </td>                      
                                      </div>
                                    </div>
                                  
                                      
                                  <td>  
                                      <form method="POST" action="{{ route('projects.update', $file->id) }}" enctype="multipart/form-data"> @csrf {!! method_field('PUT') !!} 

                                        <div class="form-group row">
                                           <div class="col-12 text-center">
                                          <div class="row justify-content-center">
                                             <div class="col-12 text-center">
                                              <label for="fileEnvio">Elije un archivo word para enviar</label>
                                              <input type="file" name="file" class="form-control-file" id="fileEnvio">
                                            </div> 
                                          </div>
                                            
                                          <div class="row justify-content-center">
                                            <div class="col-12 col-sm-7 col-md-5 mt-3">
                                              <button type="submit" class="btn btn-primary btn-block" type="submit">Enviar</button>
                                            </div>
                                          </div>
                                         </div>

                                                                        
                                        </div>

                                      </form>
                                  </td>
                              </tr>
                           @elseif(!empty($file))
                                <tr>  
                                  <td style="text-align: center;"> Aun no hay entrega </td>
                                </tr>         
                             @endif                                      
                         @empty
                           <td style="text-align: center;"><h4>No Hay Archivos</h4></td>
                        @endforelse
                            
                      </tbody>
                    </table>
                </div>  
            </div>
            
         </div>

         <div class="tab-pane col" id="tab4" role="tabpanel">
            <h3 class="mt-3">Fase-4</h3>
            <div class="row">
                <div class="col-12 col-md-4">
                  <table class="table table-bordered table-hover table-reponsive">        
                     <thead class="table-info">
                       <th>Listado de Actividades de la Fase-4</th>
                     </thead>
                          
                     <tbody>
                        @forelse($actividades as $actividad)
                           @if($actividad->fase_id === 4)
                              <tr><td>{{$actividad->Nombre}}</td>
                            @endif                             
                         @empty
                           <td colspan="6" style="text-align: center;"><h4>No Hay Actividades Registrados</h4></td>
                         @endforelse                                  
                      </tbody>

                  </table>

                </div>

                <div class="col-12 col-md-8">
                   <table class="table table-bordered table-hover table-reponsive">
                      <thead class="table-info">
                         <th>Entregas</th>
                         <th>Retroalimentar</th>
                      </thead>
      
                      <tbody>
                         @forelse($files as $file)
                            @if($file->fase_id===4) 
                              <tr>
                                  <td>
                                    <div class="row justify-content-center">
                                      <div class="col text-center">
                                          <a type="button" class="btn btn-dark" href="{{ route('projects.edit', $file->id) }}">
                                          <i class="fas fa-file-download"> Descargar Archivo</i></a>
                                            <p>Entrega Numero {{ $file->NumeroEntrega }} de 3</p>
                                  </td>                      
                                      </div>
                                    </div>
                                  
                                      
                                  <td>  
                                      <form method="POST" action="{{ route('projects.update', $file->id) }}" enctype="multipart/form-data"> @csrf {!! method_field('PUT') !!} 

                                        <div class="form-group row">
                                           <div class="col-12 text-center">
                                          <div class="row justify-content-center">
                                             <div class="col-12 text-center">
                                              <label for="fileEnvio">Elije un archivo word para enviar</label>
                                              <input type="file" name="file" class="form-control-file" id="fileEnvio">
                                            </div> 
                                          </div>
                                            
                                          <div class="row justify-content-center">
                                            <div class="col-12 col-sm-7 col-md-5 mt-3">
                                              <button type="submit" class="btn btn-primary btn-block" type="submit">Enviar</button>
                                            </div>
                                          </div>
                                         </div>

                                                                        
                                        </div>

                                      </form>
                                  </td>
                             
                           @elseif(!empty($file))
                                  <tr>
                                   <td style="text-align: center;"> Aun no hay entrega </td>
                                  </tr>     
                             @endif                                       
                         @empty
                           <td style="text-align: center;"><h4>No Hay Archivos</h4></td>
                        @endforelse
                            
                      </tbody>
                    </table>
                </div>  
            </div>
            
         </div>

         <div class="tab-pane container col" id="tab5" role="tabpanel">
            <h3 class="mt-3">Fase-5</h3>
            <div class="row">
                <div class="col-12 col-md-4">
                  <table class="table table-bordered table-hover table-reponsive">        
                     <thead class="table-info">
                       <th>Listado de Actividades de la Fase-5</th>
                     </thead>
                          
                     <tbody>
                        @forelse($actividades as $actividad)
                           @if($actividad->fase_id === 5)
                              <tr><td>{{$actividad->Nombre}}</td>
                            @endif                             
                         @empty
                           <td colspan="6" style="text-align: center;"><h4>No Hay Actividades Registrados</h4></td>
                         @endforelse                                  
                      </tbody>

                  </table>

                </div>

                <div class="col-12 col-md-8">
                   <table class="table table-bordered table-hover table-reponsive">
                      <thead class="table-info">
                         <th>Entregas</th>
                         <th>Retroalimentar</th>
                      </thead>
      
                      <tbody>
                         @forelse($files as $file)
                            @if($file->fase_id===5) 
                              <tr>
                                  <td>
                                    <div class="row justify-content-center">
                                      <div class="col text-center">
                                          <a type="button" class="btn btn-dark" href="{{ route('projects.edit', $file->id) }}">
                                          <i class="fas fa-file-download"> Descargar Archivo</i></a>
                                            <p>Entrega Numero {{ $file->NumeroEntrega }} de 3</p>
                                  </td>                      
                                      </div>
                                    </div>
                                  
                                      
                                  <td>  
                                      <form method="POST" action="{{ route('projects.update', $file->id) }}" enctype="multipart/form-data"> @csrf {!! method_field('PUT') !!} 

                                        <div class="form-group row">
                                           <div class="col-12 text-center">
                                          <div class="row justify-content-center">
                                             <div class="col-12 text-center">
                                              <label for="fileEnvio">Elije un archivo word para enviar</label>
                                              <input type="file" name="file" class="form-control-file" id="fileEnvio">
                                            </div> 
                                          </div>
                                            
                                          <div class="row justify-content-center">
                                            <div class="col-12 col-sm-7 col-md-5 mt-3">
                                              <button type="submit" class="btn btn-primary btn-block" type="submit">Enviar</button>
                                            </div>
                                          </div>
                                         </div>

                                                                        
                                        </div>

                                      </form>
                                  </td>
                                </tr>
                                  @elseif(!empty($file))
                                  <tr>
                                    <td style="text-align: center;"> Aun no hay entrega </td>
                              </tr>
                               
                          @endif     
                                                             
                         @empty
                           <td style="text-align: center;"><h4>No Hay Archivos</h4></td>
                        @endforelse
                            
                      </tbody>
                    </table>
                </div>  
            </div>
            
         </div>

       </div>

       
     
  </div>
</div>


@endsection

