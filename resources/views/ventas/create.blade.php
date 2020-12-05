@extends('layouts.plantilla')
@section('content')

<a style="margin-left:15px;" class="btn btn-primary pull-left" href="{{ URL::to('ventas') }}">Regresar</a> <br> <br>

<h1 style="margin-left:500px;" >Formulario de creación</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'ventas')) }}
<div class="row" >

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

    <div class="form-group col-md-10" style="margin-left:50px;">
    <div class="form-group col-md-10" >
        {{ Form::label('fechaEntrega', 'Fecha de Entrega') }}
        <input type="datetime-local" id="fechaEntrega" name="fechaEntrega" min="2020-01-01" max="2021-12-31">
    </div>

    <div class="col-md-12" >
        {{ Form::submit('Agregar producto', array('class' => 'btn btn-primary', 'name'=>'btn_detalle','value'=>'btn_detalle')) }}
    </div>
    <br><br>
    <div class="col-md-12" >
        {{ Form::submit('Registrar venta', array('class' => 'btn btn-primary')) }}
    </div>
</div>

{{ Form::close() }}
<table class="table table-responsive-md">
    <thead>
    <tr><th>id Producto</th>
    <th>cantidad</th>
    <th>Precio Unitario</th>
    </tr>
    </thead>
    <tbody>
        @foreach($detalles as $detalle)
            <tr>
            <td>{{$detalle['idProducto']}}</td>
            <td>{{$detalle['cantidadproducto']}}</td>
            <td>{{$detalle['preciounitario']}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection

