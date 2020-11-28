@extends('layouts.plantilla')
@section('content')
<h1 style="margin-left:500px;">Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('proveedor.update', $modelo->id), 'method' => 'PUT') ) }}

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

    <div class="form-group col-md-4">
        {{ Form::submit('Actualizar Proveedor', array('class' => 'btn btn-primary')) }}
    </div>

</div>
{{ Form::close() }}

@endsection
