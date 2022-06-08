<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>Fotografia</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>CI</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Profesión</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personas as $persona)
                <tr>
                    <td><img src="img/{{ $persona->fotografia }}" width="100" height="100"></td>
                    <td>{{ $persona->nombre }}</td>
                    <td>{{ $persona->apellido }}</td>
                    <td>{{ $persona->ci }}</td>
                    <td>{{ $persona->direccion }}</td>
                    <td>{{ $persona->telefono }}</td>
                    <td>{{ $persona->email }}</td>
                    <td>{{ $persona->profesion->nombre }}</td>
                    <td>
                    <a href="{{ route('personas.show', $persona->id) }}">Mostrar</a>
                        <a href="{{ route('personas.edit', $persona->id) }}">Editar</a>
                        <form action="{{ route('personas.destroy', $persona->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>   
             @endforeach       
                
    </table>

    <a href="{{route('personas.create')}}">Registrar</a>
    
</body>
</html>