@extends('layouts.plantilla')
@section('content')

<a href="{{ route('users.show', $modelo->id) }}">Regresar</a> <br> <br>

<h1 style="margin-left:500px;">Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('users.update', $modelo->id), 'method' => 'PUT') ) }}

<div class="form-horizontal" style="margin-left:500px;">

    <div class="form-group">
        {{ Form::label('name', 'Nombre') }}
        {{ Form::text('name', null,
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group">
        {{ Form::label('password', 'Contraseña') }}
        {{ Form::input('password', 'password', '*****', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Correo electrónico') }}
        {{ Form::email('email', null, array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('id_rol', 'rol') }}
        {{ Form::select('id_rol', $tablerol, Request::old('id_rol'), array('class' => 'form-control')) }}
    </div>

    <div>
    {{ Form::submit('Actualizar usuario', array('class' => 'btn btn-primary')) }}
    </div>

</div>
{{ Form::close() }}

@endsection
