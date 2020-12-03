@extends('layouts.plantilla')
@section('content')

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{ route('materiales.show', $modelo->id) }}">Regresar</a> <br> <br>
<h1 style="margin-left:500px;">Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('materiales.update', $modelo->id), 'method' => 'PUT') ) }}

<div class="form-horizontal" style="margin-left:500px;">
    <div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', Request::old('nombre'),array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('cantidad', 'Cantidad') }}
        {{ Form::text('cantidad', Request::old('Cantidad'), array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('tipo', 'Tipo') }}
        {{ Form::text('tipo', Request::old('tipo'), array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('descripcion', 'descripcion') }}
        {{ Form::textArea('descripcion', Request::old('descripcion'), array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('precio', 'Precio') }}
        {{ Form::text('precio', Request::old('precio'), array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('id_uni', 'Unidad') }}
        {{ Form::select('id_uni', $tableunidad, Request::old('id_uni'),
           array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::submit('Actualizar Material', array('class' => 'btn btn-primary')) }}
    </div>
</div>
{{ Form::close() }}

@endsection
