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
            <h1>Proyecto numero:</h1>
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
       
        <tr>
            <td>{{ $proyecto->id}}</td>
            <td>{{ $proyecto->NombreProd }}</td>
            <td>{{ $proyecto->Actividad }}</td>
            <td>{{ $proyecto->Telefonoemp }}</td>
            <td>{{ $proyecto->CorreoEmp }}</td>
        </tr>
 
          
       </tbody>
    </table></body>
</html>