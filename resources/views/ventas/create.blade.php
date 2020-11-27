@extends('layouts.internal')
@section('content')

<a href="{{ URL::to('ventas') }}">Regresar</a> <br> <br>

<h1>Formulario de creación</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'ventas')) }}
<div class="row">

<div class="form-group col-md-3">
        {{ Form::label('id_cliente', 'Cliente') }}
        {{ Form::select('id_cliente', $tablecliente, Request::old('id_cliente'),
           array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('id_usuario', 'Usuario') }}
        {{ Form::select('id_usuario', $tableusuario, Request::old('id_usuario'),
           array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('id_empleados', 'Empleados') }}
        {{ Form::select('id_empleados', $tableempleado, Request::old('id_empleados'),
           array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('id_detalle', 'detalle') }}
        {{ Form::select('id_detalle', $tabledetalle, Request::old('id_detalle'),
           array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', Request::old('nombre'),array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('Total', 'Total') }}
        {{ Form::text('Total', Request::old('Total'), array('class' => 'form-control', 'required'=>true)) }}
    </div>


    <div class="col-md-12">
        {{ Form::submit('Registrar venta', array('class' => 'btn btn-primary')) }}
    </div>

</div>

{{ Form::close() }}


@endsection
