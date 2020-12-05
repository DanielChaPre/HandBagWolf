@extends('layouts.plantilla')
@section('content')

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{ route('compra.show', $modelo->id) }}">Regresar</a> <br> <br>
<h1 style="margin-left:500px;">Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('almacen.update', $modelo->id), 'method' => 'PUT') ) }}

<div class="row">
    <div class="form-group col-md-5">
        {{ Form::label('producto', 'Material') }}
        {{ Form::text('producto', Request::old('producto'),array('class' => 'form-control', 'required'=>true)) }}
    </div>
    <div class="form-group col-md-5">
        {{ Form::label('cantidad', 'Cantidadxxx') }}
        {{ Form::text('cantidad', Request::old('cantidad'),array('class' => 'form-control', 'required'=>true)) }}
    </div>
    <div class="form-group col-md-5">
        {{ Form::label('costounitario', 'Costo Unitario') }}
        {{ Form::text('costounitario', Request::old('costounitario'),array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="col-md-12"style="margin-left:70px;" >
        {{ Form::submit('Actualizar Almacen', array('class' => 'btn btn-primary')) }}

    </div>

</div>
{{ Form::close() }}

@endsection
