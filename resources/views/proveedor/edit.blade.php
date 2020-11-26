@extends('layouts.internal')
@section('content')

<a href="{{ route('proveedor.show', $modelo->id) }}">Regresar</a> <br> <br>

<h1>Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('proveedor.update', $modelo->id), 'method' => 'PUT') ) }}

<div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', Request::old('nombre'),array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('direccion', 'Direccion') }}
        {{ Form::text('direccion', Request::old('direccion'), array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('contacto', 'Contacto') }}
        {{ Form::text('contacto', Request::old('contacto'), array('class' => 'form-control', 'required'=>true)) }}
    </div>


    {{ Form::submit('Actualizar Proveedor', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
