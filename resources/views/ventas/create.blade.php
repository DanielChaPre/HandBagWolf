@extends('layouts.plantilla')
@section('content')
<div class="row">
<div class="col-md-5"></div>
<div class="col-md-6">
<a  class="btn btn-primary pull-left" href="{{ URL::to('ventas') }}">Regresar</a> <br> <br>
</div>
<div class="col-md-4"></div>
<div class="col-md-6">
<h1  >Formulario de creación</h1>
</div>
{{ HTML::ul($errors->all()) }}
</div>
{{ Form::open(array('url' => 'ventas')) }}
<div class="form-group " >

<div class="form-group col-md-4">
        {{ Form::label('Folio', 'Folio') }}
        {{ Form::text('Folio', Request::old('Folio'),array('class' => 'form-control', 'required'=>true)) }}
    </div>

<div class="form-group col-md-4">
        {{ Form::label('idCliente', 'Cliente') }}
        {{ Form::select('idCliente', $tablecliente, Request::old('idCliente'),
           array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('idEmpleado', 'Empleados') }}
        {{ Form::select('idEmpleado', $tableempleado, Request::old('idEmpleados'),
           array('class' => 'form-control')) }}
    </div>

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


    <div class="form-group col-md-10" style="margin-left:50px;">
    <div class="form-group col-md-10" >
        {{ Form::label('fechaEntrega', 'Fecha de Entrega') }}
        <input type="date" id="fechaEntrega" name="fechaEntrega" min="2020-01-01" max="2021-12-31">
    </div>

    <div class="form-group col-md-4" >
        {{ Form::label('fechaRegistro', 'Fecha de Registro') }}
        <input type="date" id="fechaRegistro" name="fechaRegistro" min="2020-01-01" max="2021-12-31">
    </div>
    <div class="col-md-12" >
        {{ Form::submit('Registrar compra', array('class' => 'btn btn-primary')) }}

    </div>
</div>

{{ Form::close() }}


@endsection
