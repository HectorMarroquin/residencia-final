@extends('LayoutsEmpren')

@section('contenido')
<br>
<br>
<br>
<div class="card">
    <div class="card-header"><h5>Observaciones</h5></div>
    <div class="card-body">
        <div class="table-responsive-md">
            <form>
                {!! csrf_field() !!}
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Primera Entrega</th>
                            <th scope="col">Segunda Entrega</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>fgdgdfgdfgdfgfdgdfg</td>
                            <td>fgdfgdfgdfgdfg</td>
                           
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
       
    </div>
</div>


@endsection