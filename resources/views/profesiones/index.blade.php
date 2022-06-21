<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="{{'menu'}}">Ir Al Menu</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($profesiones as $profesion)
                <tr>
                    <td>{{ $profesion->id }}</td>
                    <td>{{ $profesion->nombre }}</td>
                    <td>
                    <a href="{{ route('profesiones.show', $profesion->id) }}">Mostrar</a>
                        <a href="{{ route('profesiones.edit', $profesion->id) }}">Editar</a>
                        <form action="{{ route('profesiones.destroy', $profesion->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>   
             @endforeach       
                
    </table>

    <a href="{{route('profesiones.create')}}">Registrar</a>
    
</body>
</html>