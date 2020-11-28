@extends('layouts.internal')
@section('content')

<a href="{{route('unidad.index')}}">Inicio</a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información del Unidad</th>
            <th>
                {{ Form::open(array('url' => route('unidad.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('unidad.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger', 'onclick' => "return confirm('¿Eliminar Registro?')")) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Nombre de unidad </td> <td>{{$modelo->nombre}}</td></tr>
    </tbody>
</table>



@endsection
