@extends('layouts.plantilla')
@section('content')
<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{route('almacen.index')}}">Regresar</a> <br><br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Información del almacen</th>
            <th>
                {{ Form::open(array('url' => route('almacen.destroy', $modelo->id), 'class' => '')) }}
                    <a style="margin-right:5px" class="btn btn-primary pull-left" href="{{route('almacen.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Descripción </td> <td>{{$modelo->descripcion}}</td></tr>
            <tr><td> Ubicación </td> <td>{{$modelo->ubicacion}}</td></tr>
            <tr><td> Tipo de almacen </td> <td>{{$modelo->tipo_material}}</td></tr>
    </tbody>
</table>



@endsection
