<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje Recibido</title>
</head>
<body>
    <h1>Tu registro fue completado con exito</h1>
    <h2>Correo para iniciar sesión:</h2><span style="font-weight:bold;">{{ $msg->email }}</span>
    <h2>Contraseña:</h2><span style="font-weight:bold;">{{ $msg->password}} </span> 
    
</body>
</html>