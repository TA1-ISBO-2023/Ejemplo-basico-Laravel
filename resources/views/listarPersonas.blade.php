<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include("header")
    <br>
    @if(session('eliminado'))
        <b> Persona Eliminada</b>
    @endif

    @if(session('creado'))
        <b> Persona Creada</b>
    @endif

    @if(session('modificado'))
        <b> Persona modificada</b>
    @endif

    <table>
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Correo</td>
            <td>Fecha de Creación</td>
            <td>Fecha de Modificación</td>
        </tr>
        @foreach($personas as $p)
        <tr>
            <td>{{ $p -> id }}</td>
            <td>{{ $p -> nombre }}</td>
            <td>{{ $p -> apellido }}</td>
            <td>{{ $p -> correo }}</td>
            <td>{{ $p -> created_at }}</td>
            <td>{{ $p -> updated_at }}</td>
            <td>
                <a href="/eliminarPersona/{{ $p -> id }}">Eliminar</a> 
                <a href="/modificarPersona/{{ $p -> id }}">Modificar</a> 

            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>