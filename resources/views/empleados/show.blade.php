@extends('layouts.internal')
@section('content')

<a href="{{route('empleados.index')}}">Inicio</a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información del empleado</th>
            <th>
                {{ Form::open(array('url' => route('empleados.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('empleados.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Nombre del empleado </td> <td>{{$modelo->nombre}}</td></tr>
            <tr><td> Apellido del empleado </td> <td>{{$modelo->apellido}}</td></tr>
            <tr><td> Fecha de Nacimiento del empleado </td> <td>{{$modelo->fechaNac}}</td></tr>
            <tr><td> Colonia del empleado </td> <td>{{$modelo->colonia}}</td></tr>
            <tr><td> Calle del empleado </td> <td>{{$modelo->calle}}</td></tr>
            <tr><td> Numero de Casa del empleado </td> <td>{{$modelo->numExt}}</td></tr>
            <tr><td> Codigo Postal del empleado </td> <td>{{$modelo->cp}}</td></tr>
            <tr><td> Correo Electronico del empleado </td> <td>{{$modelo->correo}}</td></tr>
            <tr><td> Número Telefonico del empleado </td> <td>{{$modelo->telefono}}</td></tr>
            <tr><td> RFC del empleado </td> <td>{{$modelo->rfc}}</td></tr>
    </tbody>
</table>



@endsection
