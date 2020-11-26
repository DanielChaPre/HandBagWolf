@extends('layouts.internal')
@section('content')

<a href="{{ URL::to('detalleventa') }}">Regresar</a> <br> <br>

<h1>Formulario de creación</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'detalleventa')) }}
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
        {{ Form::label('Precio', 'Precio') }}
        {{ Form::text('precio', Request::old('precio'), array('class' => 'form-control', 'required'=>true)) }}
    </div>


    <div class="col-md-12">
        {{ Form::submit('Registrar detalleventa', array('class' => 'btn btn-primary')) }}
    </div>

</div>

{{ Form::close() }}


@endsection
