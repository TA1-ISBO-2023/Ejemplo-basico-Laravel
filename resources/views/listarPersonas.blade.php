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
    @isset($eliminado)
        <b> Persona Eliminada</b>
    @endisset

    @isset($insertado)
    <b> Persona Creada</b>
    @endisset
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
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>