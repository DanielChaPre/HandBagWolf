@extends('layouts.plantilla')
@section('content')

<a style="margin-left:500px;" class="btn btn-primary pull-left" href="{{ URL::to('ventas') }}">Regresar</a> <br> <br>

<h1 style="margin-left:500px;" >Formulario de creación</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'ventas')) }}
<div class="form-group" style="margin-left:500px;">

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

    <div class="form-group col-md-10" style="margin-left:50px;">
        {{ Form::label('fechaEntrega', 'Fecha de Entrega') }}
        <input type="date" id="fechaEntrega" name="fechaEntrega" min="2020-01-01" max="2021-12-31">
    </div>

    <div class="form-group col-md-4" style="margin-left:50px;">
        {{ Form::label('fechaRegistro', 'Fecha de Registro') }}
        <input type="date" id="fechaRegistro" name="fechaRegistro" min="2020-01-01" max="2021-12-31">
    </div>
    <div class="col-md-12" style="margin-left:40px;">
        {{ Form::submit('Registrar compra', array('class' => 'btn btn-primary')) }}

    </div>
</div>

{{ Form::close() }}


@endsection
