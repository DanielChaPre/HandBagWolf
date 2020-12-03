@extends('layouts.plantilla')
@section('content')

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{route('clientes.index')}}">Inicio</a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información del cliente</th>
            <th>
                {{ Form::open(array('url' => route('clientes.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('clientes.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger', 'onclick' => "return confirm('¿Eliminar Registro?')")) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Nombre del cliente </td> <td>{{$modelo->nombre}}</td></tr>
            <tr><td> Apellido del cliente </td> <td>{{$modelo->apellido}}</td></tr>
            <tr><td> Fecha de Nacimiento del cliente </td> <td>{{$modelo->fechaNac}}</td></tr>
            <tr><td> Colonia del cliente </td> <td>{{$modelo->colonia}}</td></tr>
            <tr><td> Calle del cliente </td> <td>{{$modelo->calle}}</td></tr>
            <tr><td> Numero de Casa del cliente </td> <td>{{$modelo->numExt}}</td></tr>
            <tr><td> Codigo Postal del cliente </td> <td>{{$modelo->cp}}</td></tr>
            <tr><td> Correo Electronico del cliente </td> <td>{{$modelo->correo}}</td></tr>
            <tr><td> Número Telefonico del cliente </td> <td>{{$modelo->telefono}}</td></tr>
            <tr><td> RFC del cliente </td> <td>{{$modelo->rfc}}</td></tr>
    </tbody>
</table>



@endsection
