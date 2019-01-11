@extends('LayoutAs')

@section('contenido')
        <div id="page-content-wrapper" class="form-group" >
               <div class="container-fluid">
                <h2>Alta Del Proyecto</h2>
                 <hr>
                <form>
                <table class="table table-striped">                
                    <tbody>
                        <tr>
                            <td colspan="1">
                                <label>Sector De Actividad En La Que Se Desarrolla:</label>
                            </td>

                            <td colspan="3">
                                  <div class="form-group ">
                                    <select class="form-control col-sm-5" id="">
                                        <option value="">Selecciona una opcion</option>
                                        <option value="1">Sector Extractivo</option>
                                        <option value="2">Sector Servicio O Orientado A Negocio</option>
                                        <option value="3">Sector Transformación</option>
                                        <option value="4">Sector Servicio O Orientado A Cosumudores</option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                 <label>Razon Social:</label>
                            </td>

                            <td>
                                  <input type="text" name="razonsocial" placeholder="Razon Social" class="form-control infoemprendedor">
                            </td>

                            <td>
                                <label>RFC:</label>
                            </td>

                            <td>
                                <input type="text" name="rfc" placeholder="RFC" class="form-control ">
                            </td>
                            
                        </tr>

                        <tr>
                             <td>
                                <label>Nombre Del Director De La Empresa:</label>
                            </td>

                            <td>
                                  <input type="text" name="director" placeholder="Director De La Empresa" class="form-control infoemprendedor">
                            </td>

                            <td>
                                 <label>Telefono De la Empresa:</label>
                            </td>

                            <td>
                                  <input type="text" name="telefono" placeholder="Telefono" class="form-control infoemprendedor">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1">
                                <label>Correo Eletronico</label>
                            </td>

                            <td colspan="3">
                                 <input type="text" name="correo" placeholder="Correo Eletronico De La Empresa" class="form-control infoemprendedor col-sm-5">
                            </td>
                        </tr>

                        <tr>
                             <td>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        Propuesta De Negocio Es:
                                    </label>
                                </div>
                            </td>

                            <td>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="optradio">Producto
                                    </label>
                                </div>

                                 <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="optradio">Servicio
                                    </label>
                                </div>  
                            </td>                          
                            <td>
                                 <label>Otro:</label>
                            </td>

                            <td>
                                  <input type="text" name="otro" placeholder="otro" class="form-control infoemprendedor">
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1">
                                <label>Nombre Del Producto O Servicio:</label>
                            </td>

                            <td colspan="3">
                                 <input type="text" name="proser" placeholder="Nombre del producto o servicio" class="form-control infoemprendedor col-sm-5">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="4">
                                <div class="form-group">
                                    <label for="comment">Describe en que consiste su propuesta (100 palabras)</label>
                                    <textarea class="form-control" rows="3" id="comment"></textarea>
                                </div>
                            </td>
                        </tr>

                         <tr>
                            <td>
                                <label>Pertenece alguna organizacion:</label>
                            </td>

                            <td>
                                  <div class="form-group ">
                                    <select class="form-control " id="">
                                        <option value="">Selecciona una opcion</option>
                                        <option value="1">Si</option>
                                        <option value="2">No</option>
                                        
                                    </select>
                                </div>
                            </td>

                             <td>
                                 <label>Cual:</label>
                            </td>

                            <td>
                                  <input type="text" name="cual" placeholder="Cual" class="form-control infoemprendedor">
                            </td>
                        </tr>

                        
                        <tr style=" text-align:center;">
                            <td>
                                <button type="button" class="btn btn-outline-primary">Guardar</button>
                            </td>

                             <td>
                                <button type="button" class="btn btn-outline-primary">Cancelar</button>
                            </td>

                             <td colspan="2">
                                <button type="button" class="btn btn-outline-primary">Imprimir</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>


            

@endsection

