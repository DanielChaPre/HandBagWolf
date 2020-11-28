@extends('layouts.internal')
@section('content')

<a href="{{route('roles.index')}}">Inicio</a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información del usuario</th>
            <th>
                {{ Form::open(array('url' => route('roles.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('roles.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger', 'onclick' => "return confirm('¿Eliminar Registro?')")) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Nombre de usuario </td> <td>{{$modelo->nombre}}</td></tr>
    </tbody>
</table>



@endsection
