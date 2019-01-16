@extends('emprendedor')

@section('empren')

<br>
<br>
<br>
<div class="card">
<div class="card-header"><h5>Estado del Proyecto</h5></div>
<div class="card-body">
    
<div class="table-responsive-md">  
{!! csrf_field() !!} 
        <table class="table table-hover table-bordered">
            <thead class="thead-light">
                <tr>
                      <th scope="col">Nombre de Proyecto</th>
                      <th scope="col">Nombre del Asesor</th>
                      <th scope="col">Fase</th>
                      <th scope="col">Estado</th>
                </tr>
          </thead>
          <tbody>
                <tr>
                      <td>Plataforma dijital para la consulta de actas de matrimono</td>
                      <td>Juan carlos pimentel diaz</td>
                      <td>1</td>
                      <td><span class="badge badge-pill badge-danger">Reprovado</span></td></td> 

                </tr>

                <tr>
                    <td>Seguridad para las casa habitacion</td>
                    <td>Maria Guadalupe Monjaras Velazco</td>
                    <td>3</td>
                    <td><span class="badge badge-pill badge-success">Aprovado</span></td></td>
                </tr>
           </tbody>
        </table>
    </div>



    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>

  </div>

</div>

<!-- Modal para Estado del proyecto -->
<div class="containar">
  <div class="modal fade" id="ventana">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Header de la ventana-->
        <div class="modal-header">
          <h5>Estado Del Proyecto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
         <!-- Contenido de la ventana-->
        <div class="modal-body">
          <form class="needs-validation" novalidate>
              <table class="table">
                <tr> 
                  <td>
                     <label>Nombre del asesor</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Juan carlos</label>
                  </td>         
                </tr>

                <tr>
                  <td><label>Apellido Paterno</label><br></td>
                </tr>

                <tr>
                  <td><label>Pimentel</label></td>
                </tr>
      
              </table>
            </form>
            </div>
         <!-- footer de la ventana-->

        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection