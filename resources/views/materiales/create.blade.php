@extends('layouts.internal')
@section('content')

<a href="{{ URL::to('materiales') }}">Regresar</a> <br> <br>

<h1>Formulario de creación</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'materiales')) }}
<div class="row">

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
        {{ Form::label('Precio', 'Precio') }}
        {{ Form::text('Precio', Request::old('Precio'), array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="col-md-12">
        {{ Form::submit('Registrar Material', array('class' => 'btn btn-primary')) }}
    </div>

</div>

{{ Form::close() }}


@endsection
