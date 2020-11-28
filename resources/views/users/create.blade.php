@extends('layouts.plantilla')
@section('content')

<a href="{{ URL::to('users') }}">Regresar</a> <br> <br>

<h1 style="margin-left:500px;">Registro de Usuario</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'users')) }}

<div class="form-horizontal" style="margin-left:500px;">

    <div class="form-group col-md-4">
        {{ Form::label('name', 'Nombre') }}
        {{ Form::text('name', Request::old('name'),
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('password', 'Contraseña') }}
        {{ Form::text('password', Request::old('password'), array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('email', 'Correo electrónico') }}
        {{ Form::email('email', Request::old('email'), array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('id_rol', 'rol') }}
        {{ Form::select('id_rol', $tablerol, Request::old('id_rol'),
           array('class' => 'form-control')) }}
    </div>

    <div class="col-md-12">
        {{ Form::submit('Registrar usuario', array('class' => 'btn btn-primary')) }}
    </div>

</div>
{{ Form::close() }}


@endsection
