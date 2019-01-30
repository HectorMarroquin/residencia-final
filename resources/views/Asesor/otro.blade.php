
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