@extends('layouts.internal')
@section('content')

<a href="{{route('proveedor.index')}}">Inicio</a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información del proveedor</th>
            <th>
                {{ Form::open(array('url' => route('proveedor.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('proveedor.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger', 'onclick' => "return confirm('¿Eliminar Registro?')")) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Nombre de proveedor </td> <td>{{$modelo->nombre}}</td></tr>
            <tr><td> Direccion </td> <td>{{$modelo->direccion}}</td></tr>
            <tr><td> Contacto </td> <td>{{$modelo->contacto}}</td></tr>
    </tbody>
</table>



@endsection
