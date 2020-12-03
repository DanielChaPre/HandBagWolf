@extends('layouts.internal')
@section('content')

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{route('ventas.index')}}">Regresar</a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información del Ventas</th>
            <th>
                {{ Form::open(array('url' => route('ventas.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('ventas.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger', 'onclick' => "return confirm('¿Eliminar Registro?')")) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Cliente </td> <td>{{$modelo->getCliente->nombre}}</td></tr>
            <tr><td> Nombre</td> <td>{{$modelo->nombre}}</td></tr>
            <tr><td> Usuario </td> <td>{{$modelo->getUsuarios->name}}</td></tr>
            <tr><td> Empleados </td> <td>{{$modelo->getEmpleado->nombre}}</td></tr>
            <tr><td> Detalle </td> <td>{{$modelo->getdetalle->nombre}}</td></tr>
            <tr><td> Total </td> <td>{{$modelo->Total}}</td></tr>
            <tr><td> Fecha de registro </td> <td>{{$modelo->created_at}}</td></tr>
            <tr><td> Fecha de modificación </td> <td>{{$modelo->updated_at}}</td></tr>
    </tbody>
</table>



@endsection
