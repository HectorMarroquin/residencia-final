<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/boots.css">
    <style>
    
    body{
        font-size: 10px;
    }
    .color{
        background-color: aliceblue;
        text-align: center;
    }
    .cabecera{
       background-color: slategrey; 
    }
    td {
        border: solid 1px #000000
    }
    </style>
</head>
<body>
    <div class="text-center mb-5">
            <h1>Proyectos Registrados en el Sistema</h1>
    </div>
    
    <table class="table table-bordered table-sm">
        <thead class="cabecera" style="text-center">
          <tr>
              <th scope="col">Numero de Proyecto</th>
              <th scope="col">Nombre de Proyecto</th>
              <th scope="col">Nombre de la Empresa</th>
              <th scope="col">Tipo de Sector</th>
              <th scope="col">Telefono</th>
              <th scope="col">Dirección</th>
              <th scope="col">Nombre del Director</th>
              <th scope="col">Descripción</th> 
          </tr>
      </thead>
      <tbody>
        @forelse ($proyectos as $proyecto)
        <tr>
            <td>{{ $proyecto->id}}</td>
            <td>{{ $proyecto->NombreProd }}</td>
            <td>{{ $proyecto->Organizacion }}</td>
            <td>{{ $proyecto->Actividad }}</td>
            <td>{{ $proyecto->Telefonoemp }}</td>
            <td>{{ $proyecto->Emprendedor->Municipio }}</td>
            <td>{{ $proyecto->NombreDirector }}</td>
            <td>{{ $proyecto->Descripcion }}</td>
        </tr>
        @empty
        <td colspan="8" style="text-align: center;"><h4>No Hay Emprendedores Registrados</h4></td>
        @endforelse
          
       </tbody>
    </table></body>
</html>