@extends('emprendedor')

@section('empren')
<div id="page-content-wrapper" class="container-fluid form-group" >
    <br>
    <div class="container-fluid">
        <div class="card-header"><h5>Editar Colaborador</h5></div>
        <div class="card-body">
        <div class="table-responsive-md"> 
        @if (session()->has('in'))
        <div class="alert alert-success">{{ session('in')}}</div>
        @endif
        <form method="POST" action="{{ route('Colaborador.update', $Colaborador->id)}}">
            {!! method_field('PUT') !!}
            {{ csrf_field() }}  
             <div class="tab-content"><br>
                <table class="table ">
                    <tbody>
                        <tr>
                            <td>
                                <label>Nombre:</label>
                            </td>

                            <td>
                                 <input type="text" name="NombreC" class="form-control infoemprendedor"  value="{{$Colaborador->NombreC}}">
                                 {!! $errors->first('NombreC', '<span class=errores>:message</span>') !!}
                            </td> 
                    
                             <td>
                                 <label>Apellido Paterno:</label>
                            </td>

                            <td>
                                <input type="text" name="ApellidoPC" class="form-control infoemprendedor" value="{{$Colaborador->ApellidoPC}}">
                                {!! $errors->first('ApellidoPC', '<span class=errores>:message</span>') !!}
                            </td>
                        </tr>
                        <tr>
                       

                            <td>
                                <label>Apellido Materno</label>
                            </td>

                            <td>
                                <input type="text" name="ApellidoMC" class="form-control infoemprendedor" value="{{$Colaborador->ApellidoMC}}">
                                {!! $errors->first('ApellidoMC', '<span class=errores>:message</span>') !!}
                            </td>
                          
                            <td>
                                 <label>CURP:</label>
                            </td>

                            <td>
                                  <input type="text" name="CURPC" class="form-control infoemprendedor" value="{{$Colaborador->CURPC}}">
                                  {!! $errors->first('CURPC', '<span class=errores>:message</span>') !!}
                            </td>

                        </tr>

                        <tr style=" text-align:center;">
                            <td colspan="4">
                                <input type="submit" value="Editar" class="btn btn-outline-primary">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
                  </div>
            </div>
        </div>
</div>
</div>
</div>
@endsection
        


