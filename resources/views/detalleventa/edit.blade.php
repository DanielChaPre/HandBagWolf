@extends('layouts.plantilla')
@section('content')
<h1 style="margin-left:500px;">Formulario de registro de productos</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('route' => array('detalleventa.update', $idComp), 'method' => 'PUT') ) }}

<div class="row">
    <div class="form-group col-md-4">
        {{ Form::label('producto', 'Producto') }}
        {{ Form::select('idProducto', $tableproducto, Request::old('idProducto'),
           array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('cantididad', 'Cantidad') }}
        {{ Form::text('cantidadproducto', Request::old('cantidadproducto'),array('class' => 'form-control', 'required'=>true)) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('preciounitario', 'Costo Unitario') }}
        {{ Form::text('preciounitario', Request::old('preciounitario'),array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="col-md-12"style="margin-left:70px;" >
        {{ Form::submit('Registrar producto', array('class' => 'btn btn-primary')) }}

    </div>

</div>
{{ Form::close() }}

@endsection
