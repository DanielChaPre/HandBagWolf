@extends('layouts.internal')
@section('content')

<a href="{{ route('detalleventa.show', $modelo->id) }}">Regresar</a> <br> <br>

<h1>Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('detalleventa.update', $modelo->id), 'method' => 'PUT') ) }}
<div class="row">
    <div class="form-group col-md-3">
        {{ Form::label('id_pedido', 'Pedido') }}
        {{ Form::select('id_pedido', $tablepedido, Request::old('id_pedido'),
           array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('id_producto', 'Producto') }}
        {{ Form::select('id_producto', $tableproducto, Request::old('id_producto'),
           array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', Request::old('nombre'),array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('precio', 'Precio') }}
        {{ Form::text('precio', Request::old('precio'), array('class' => 'form-control', 'required'=>true)) }}
    </div>


    {{ Form::submit('Actualizar Detalleventa', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
