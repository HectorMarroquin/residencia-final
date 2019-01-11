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
            <h1>Proyecto numero: {{ $proyecto->id }}</h1>
    </div>
    
    <div><span>Proyecto realizado por: </span>{{ $proyecto->Emprendedor->Nombre }}</div>
    <div><span>Nombre del proyecto: </span>{{ $proyecto->NombreProd }}</div>
    <div><span>Actividad: </span> {{ $proyecto->Actividad }}</div>
    <div><span>Telefono de la empresa: </span>{{ $proyecto->Telefonoemp }}</div>
    <div><span>Correo empresarial: </span>{{ $proyecto->CorreoEmp }}</div>
    
       
         
 
</body>
</html>