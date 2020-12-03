@extends('layouts.plantilla')
@section('content')

<a style="margin-left:500px;" class="btn btn-primary pull-left" href="{{ URL::to('proveedor') }}">Regresar</a> <br> <br>

<h1 style="margin-left:500px;">Registro de Proveedor</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'proveedor')) }}

<div class="form-horizontal" style="margin-left:500px;">

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

    <div class="col-md-12">
        {{ Form::submit('Registrar Proveedor', array('class' => 'btn btn-primary')) }}
    </div>

</div>
{{ Form::close() }}


@endsection
