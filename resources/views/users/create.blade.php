@extends('layouts.plantilla')
@section('content')

<div class="row">
<div class="col-md-5"></div>
<h1 style="">Registro de Usuario</h1>

</div>
<div class="row">
<div class="col-md-9"></div>
<a class="btn btn-primary pull-left" href="{{ URL::to('users') }}">Regresar</a>
{{ HTML::ul($errors->all()) }}
</div>
{{ Form::open(array('url' => 'users')) }}

<div class="form-horizontal" style="">

    <div class="row">
    <div class="col-2"></div>
    <div class="form-group col-md-4">
        {{ Form::label('name', 'Nombre') }}
        {{ Form::text('name', Request::old('name'),
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('password', 'Contraseña') }}
        {{ Form::text('password', Request::old('password'), array('class' => 'form-control', 'required'=>true)) }}
    </div>
    </div>
    <div class="row">
    <div class="col-2"></div>
    <div class="form-group col-md-4">
        {{ Form::label('email', 'Correo electrónico') }}
        {{ Form::email('email', Request::old('email'), array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('id_rol', 'rol') }}
        {{ Form::select('id_rol', $tablerol, Request::old('id_rol'),
           array('class' => 'form-control')) }}
    </div>
    </div>
    <div class="row">
    <div class="col-5"></div>
        <div class="col-md-7">
            {{ Form::submit('Registrar usuario', array('class' => 'btn btn-primary')) }}
        </div>
    </div>
</div>
{{ Form::close() }}


@endsection
