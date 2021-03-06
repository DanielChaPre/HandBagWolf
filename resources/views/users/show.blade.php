@extends('layouts.plantilla')
@section('content')

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{route('users.index')}}">Regresar</a> <br><br>

<br>
<table class="table table-responsive-md">
    <thead>
        <tr>
            <th>Información del usuario</th>
            <th>
                {{ Form::open(array('url' => route('users.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('users.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger', 'onclick' => "return confirm('¿Eliminar Registro?')")) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Nombre de usuario </td> <td>{{$modelo->name}}</td></tr>
            <tr><td> Email </td> <td>{{$modelo->email}}</td></tr>
            <tr><td> Fecha de registro </td> <td>{{$modelo->created_at}}</td></tr>
            <tr><td> Fecha de modificación </td> <td>{{$modelo->updated_at}}</td></tr>
            <tr><td> rol </td> <td>{{$modelo->getRol->nombre}}</td></tr>
    </tbody>
</table>



@endsection
