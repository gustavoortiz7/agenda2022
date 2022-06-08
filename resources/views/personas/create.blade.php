<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{route('personas.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"> <br>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido"> <br>
        <label for="ci">CI</label>
        <input type="text" name="ci" id="ci"> <br>
        <label for="direccion">Dirección</label> 
        <input type="text" name="direccion" id="direccion"> <br>
        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" id="telefono"> <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email"> <br>
        <label for="profesion">Profesión</label>
        <select name="profesion_id" id="profesion_id">
            @foreach($profesiones as $profesion)
                <option value="{{$profesion->id}}">{{$profesion->nombre}}</option>
            @endforeach
        </select> <br>

        <label for="fotografia">Fotografía</label>
        <input type="file" name="fotografia" id="fotografia"> <br>
        <button type="submit">Guardar</button>
    </form>
    
</body>
</html>