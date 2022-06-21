<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="contenedor">
    <div class="menu">
    <form action="{{route('profesiones.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"> <br>
        <button type="submit">Guardar</button>
    </form>
    </div>
</div>
    
</body>
</html>