@extends('layouts.internal')
@section('content')

<a href="{{ route('marca.show', $modelo->id) }}">Regresar</a> <br> <br>

<h1>Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('marca.update', $modelo->id), 'method' => 'PUT') ) }}

    <div class="form-group">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', null,
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    {{ Form::submit('Actualizar Marca', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
