<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li>Nombre: {{ $persona->nombre }}</li>
        <li>Apellidos: {{ $persona->apellido }}</li>
        <li>Ci: {{ $persona->ci }}</li>
        <li>Dirección:{{ $persona->direccion }}</li>
        <li>Telefono:{{ $persona->telefono }}</li>
        <li>Email:{{ $persona->email }}</li>
        <li>Profesion:{{ $persona->profesion->nombre }}</li>
    </ul>


</body>

</html>