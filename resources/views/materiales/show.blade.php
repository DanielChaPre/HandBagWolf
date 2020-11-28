@extends('layouts.plantilla')
@section('content')

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{route('materiales.edit', $modelo->id)}}">Agregar Material</a>
<br>
<table class="table table-responsive-md">
    <thead>
        <tr>
            <th>Información del usuario</th>
            <th>
                {{ Form::open(array('url' => route('materiales.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('materiales.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger', 'onclick' => "return confirm('¿Eliminar Registro?')")) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Nombre de usuario </td> <td>{{$modelo->nombre}}</td></tr>
            <tr><td> Cantidad </td> <td>{{$modelo->cantidad}}</td></tr>
            <tr><td> Tipo </td> <td>{{$modelo->tipo}}</td></tr>
            <tr><td> Descripcion </td> <td>{{$modelo->descripcion}}</td></tr>
            <tr><td> Precio </td> <td>{{$modelo->precio}}</td></tr>
            <tr><td> Fecha de registro </td> <td>{{$modelo->created_at}}</td></tr>
            <tr><td> Fecha de modificación </td> <td>{{$modelo->updated_at}}</td></tr>
            <tr><td> unidad </td> <td>{{$modelo->getUni->nombre}}</td></tr>
    </tbody>
</table>



@endsection
