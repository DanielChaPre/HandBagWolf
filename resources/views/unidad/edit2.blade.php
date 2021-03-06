@extends('layouts.internal')
@section('content')

<a href="{{ route('unidad.show', $modelo->id) }}">Regresar</a> <br> <br>

<h1>Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('unidad.update', $modelo->id), 'method' => 'PUT') ) }}

    <div class="form-group">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', null,
           array('class' => 'form-control', 'required'=>true)) }}
    </div>
    <div>
    {{ Form::submit('Actualizar unidad', array('class' => 'btn btn-primary')) }}
    </div>
{{ Form::close() }}

@endsection
