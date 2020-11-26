@extends('layouts.internal')
@section('content')

<a href="{{route('detalleventa.index')}}">Inicio</a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información del Detalleventa</th>
            <th>
                {{ Form::open(array('url' => route('detalleventa.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('detalleventa.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger', 'onclick' => "return confirm('¿Eliminar Registro?')")) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> pedido </td> <td>{{$modelo->getPedido->nombre}}</td></tr>
            <tr><td> Nombre</td> <td>{{$modelo->nombre}}</td></tr>
            <tr><td> producto </td> <td>{{$modelo->getProducto->nombre}}</td></tr>
            <tr><td> Precio </td> <td>{{$modelo->precio}}</td></tr>
            <tr><td> Fecha de registro </td> <td>{{$modelo->created_at}}</td></tr>
            <tr><td> Fecha de modificación </td> <td>{{$modelo->updated_at}}</td></tr>
    </tbody>
</table>



@endsection
