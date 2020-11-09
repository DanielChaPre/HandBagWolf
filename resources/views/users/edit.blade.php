@extends('layouts.internal')
@section('content')

<a href="{{ route('users.show', $modelo->id) }}">Regresar</a> <br> <br>

<h1>Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('users.update', $modelo->id), 'method' => 'PUT') ) }}

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


    {{ Form::submit('Actualizar usuario', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
