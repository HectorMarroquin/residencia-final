@extends('asesor')

@section('contenido')


<div class="row">
  <div class="col-4">
    <div class="row">
      <div class="col">
     <table class="table table-bordered table-hover table-reponsive mt-4">
        
        <thead>
          <th>Nombre del proyecto</th>
        </thead>

        <tbody>
          <td>bla bla bla bla bla bla coco coco coco coco</td>
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
        
        <thead>
          <th>Integrantes</th>
        </thead>

        <tbody>
          <tr><td>bla bla bla</td></tr>
           <tr><td>bla bla bla</td></tr>
            <tr><td>bla bla bla</td></tr>
             <tr><td>bla bla bla</td></tr>
               
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
          <a href="#tab2" class="nav-link disabled" data-toggle="tab">Fase-2</a>
      </li>
      <li class="nav-item">
        <a href="#tab3" class="nav-link disabled" data-toggle="tab">Fase-3</a>
      </li>
        <li class="nav-item">
        <a href="#tab4" class="nav-link disabled" data-toggle="tab">Fase-4</a>
      </li>
        <li class="nav-item">
        <a href="#tab5" class="nav-link disabled" data-toggle="tab">Fase-5</a>
      </li>
  </ul>

  <div class="tab-content">
          <div class="tab-pane active" id="tab1" role="tabpanel">
            <h3 class="mt-3">Panel 1</h3>
            <table class="table table-bordered table-hover table-reponsive">
              <thead>
                <th>Actividades</th>
                <th>Entregas</th>
                <th>Retroalimentar</th>
              </thead>
                <tr>
                     <td></td>
                <td>Entrega 1</td>
                 <td> 
                  <div class="form-group row">
                        <div class="col-12 col-md-10 mb-3">
                             <textarea name="mensaje" id="mensaje" class="form-control"></textarea>
                        </div>
                                                
                        <div class="col-12 col-md-2 mb-3">
                            <button type="button" class="btn btn-primary xs" >enviar</button>
                          
                        </div>
                       </div>
                 </td> 
                </tr>
              
                 <tr>
                     <td></td>
                <td>Entrega 2</td>
                 <td> 
                  <div class="form-group row">
                        <div class="col-12 col-md-10 mb-3">
                             <textarea name="mensaje" id="mensaje" class="form-control"></textarea>
                        </div>
                                                
                        <div class="col-12 col-md-2 mb-3">
                            <button type="button" class="btn btn-primary xs" >enviar</button>
                          
                        </div>
                       </div>
                 </td> 
                </tr>
  
                   <tr>
                     <td></td>
                <td>Entrega Final</td>
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
  

              

              <tbody>
                
              </tbody>
            </table>
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