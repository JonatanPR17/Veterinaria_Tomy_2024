@extends('templates.plantilla')

@section('titulo','Registro')

@section('contenido')
    <h1>En esta tabla vere todos los registros de las personas</h1>
    <a href="">Crear Persona</a>
    <table border="1px">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Fecha de Nacimiento</th>
            <th>Direccion</th>
            <th>Usuario</th>
            <th>Contraseña</th>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>
                        {{$persona->id}}
                    </td>
                    <td>
                        {{$persona->nombre}}
                    </td>
                    <td>
                        {{$persona->apellido_paterno}}
                    </td>
                    <td>
                        {{$persona->apellido_materno}}
                    </td>
                    <td>
                        {{$persona->fecha_nacimiento}}
                    </td>
                    <td>
                        {{$persona->direccion}}
                    </td>
                    <td>
                        {{$persona->usuario}}
                    </td>
                    <td>
                        {{$persona->contraseña}}
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection