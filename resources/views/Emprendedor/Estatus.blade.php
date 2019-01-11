@extends('LayoutsEmpren')

@section('contenido')
        <div id="page-content-wrapper" class="form-group">
               <div class="container-fluid">
                <h2> Estado del Proyecto </h2>
                <hr>
                <form>
                    {!! csrf_field() !!}
                <table class="table">
                    <tr>
                        <h5>Datos del Proyecto</h5>
                    </tr>
            
    
                    <tbody>
                        <tr>
                            <td>
                                Nombre del Proyecto:
                            </td>

                            <td>
                                Seguimiento de proyectos mediante una paginas web
                            </td>

                            <td>
                                Nombre de la Empresa:
                            </td>

                            <td>
                                Instituto Tecnologico De Tuxtla Guitierrez, Chiapas
                            </td>
                           
                        </tr>

                        <tr>
                            <td colspan="1">
                                Nombre Del Asesor:
                            </td>

                            <td colspan="3">
                                Aida Guillermina Cossio Martinez
                            </td>
                        </tr>

                         <tr>

                            <td>
                                Direccion De La Empresa:
                            </td>

                            <td>
                                2 avenida norte entre 4 y 5 poniente
                            </td>

                            <td>
                                Sector de actividad en la que se dasarrolla:
                            </td>

                            <td>
                                Sector Transformacion
                            </td>

                             
                        </tr>


                        <tr>

                            <td>
                                Propuesta De Negocio Es:
                            </td>

                            <td>
                                Servicio
                            </td>

                            <td>
                                Tipo De Empresa:
                            </td>

                            <td>
                               Sociedad En Nombre Colectivo
                            </td>

                             
                        </tr>

                        <tr>

                            <td>
                                Estado Del Proyecto:
                            </td>

                            <td>
                                Aprobado
                            </td>

                            <td>
                                Nivel Del Proyecto:
                            </td>

                            <td>
                               3 Nivel
                            </td>

                             
                        </tr>

                        <tr style=" text-align:center;">
                        
                             <td colspan="4">
                                <button type="button" class="btn btn-outline-primary">Regresar</button>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>


@endsection