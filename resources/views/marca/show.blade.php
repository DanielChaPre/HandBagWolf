@extends('layouts.internal')
@section('content')

<a href="{{route('marca.index')}}">Inicio</a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información de la marca</th>
            <th>
                {{ Form::open(array('url' => route('marca.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('marca.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Nombre de usuario </td> <td>{{$modelo->nombre}}</td></tr>
    </tbody>
</table>



@endsection
