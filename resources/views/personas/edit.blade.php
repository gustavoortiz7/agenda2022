<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{route('personas.update',$persona)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{$persona->nombre}}"> <br>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" value="{{$persona->apellido}}"> <br>
        <label for="ci">CI</label>
        <input type="text" name="ci" id="ci" value="{{$persona->ci}}"> <br>
        <label for="direccion">Dirección</label> 
        <input type="text" name="direccion" id="direccion" value="{{$persona->direccion}}"> <br>
        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" id="telefono" value="{{$persona->telefono}}"> <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{$persona->email}}"> <br>
        <label for="profesion">Profesión</label>
        <select name="profesion_id" id="profesion_id">
            @foreach($profesiones as $profesion)
                <option value="{{$profesion->id}}" {{$persona->profesion_id==$profesion->id?'selected':''}}>{{$profesion->nombre}}</option>
            @endforeach
        </select> <br>

        <label for="fotografia">Fotografía</label>
        <img src="img/{{$persona->fotografia}}" alt="">
        <input type="file" name="fotografia" id="fotografia"> <br>
        <button type="submit">Guardar</button>
    </form>
    
</body>
</html>