@extends('layouts.internal')
@section('content')


<a href="{{route('productos.index')}}" class="btn btn-primary">Inicio</a> <br><br>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th colspan=2 style="text-align:center">Datos del Producto</th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Nombre de producto </td> <td>{{$modelo->nombre}}</td></tr>
            <tr><td> Modelo </td> <td>{{$modelo->modelo}}</td></tr>
            <tr><td> Imagen </td><td><img src="{{ asset('storage/'.$modelo->imgNombreFisico )}}" width="10%" ></td></tr>
            <tr><td> Fecha de registro </td> <td>{{$modelo->created_at}}</td></tr>
            <tr><td> Fecha de modificación </td> <td>{{$modelo->updated_at}}</td></tr>
            <tr><td colspan=2 style="text-align:center">{{ Form::open(array('url' => route('productos.destroy', $modelo->id), 'class' => 'pull-right')) }}
                    <a class="btn btn-primary" href="{{route('productos.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger','onclick' => "return confirm('¿Eliminar Registro?')")) }}
                {{ Form::close() }}</td></tr>
    </tbody>

</table>


@endsection
