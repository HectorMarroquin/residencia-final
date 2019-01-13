<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    
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
    <div class="color">
            <h1>Proyectos Registrados en el Sistema</h1>
    </div>
    
    <table class="table table-bordered">
        <thead class="cabecera">
          <tr>
              <th scope="col">Numero</th>
              <th scope="col">Proyecto</th>
              <th scope="col">Empresa</th>
              <th scope="col">Telefono</th>
              <th scope="col">Correo</th>
         
          </tr>
      </thead>
      <tbody>
        @forelse ($proyectos as $proyecto)
        <tr>
            <td>{{ $proyecto->id}}</td>
            <td>{{ $proyecto->NombreProd }}</td>
            <td>{{ $proyecto->Actividad }}</td>
            <td>{{ $proyecto->Telefonoemp }}</td>
            <td>{{ $proyecto->CorreoEmp }}</td>
        </tr>
        @empty
        <td colspan="8" style="text-align: center;"><h4>No Hay Emprendedores Registrados</h4></td>
        @endforelse
          
       </tbody>
    </table></body>
</html>