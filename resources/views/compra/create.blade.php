@extends('layouts.plantilla')
@section('content')

<h1 style="margin-left:500px;">Registro de compra</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'compra')) }}
<div class="form-horizontal" style="margin-left:500px;">
    <div class="form-group col-md-5">
        {{ Form::label('folio', 'Folio') }}
        {{ Form::text('folio', Request::old('folio'),array('class' => 'form-control', 'required'=>true)) }}
    </div>
    <div class="form-group col-md-5">
        {{ Form::label('proveedor', 'Proveedor') }}
        {{ Form::select('idProveedor', $tableProveedor, Request::old('idProveedor'),
           array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-5">
        {{ Form::label('descripcion', 'Descripción') }}
        {{ Form::text('descripcion', Request::old('descripcion'),array('class' => 'form-control', 'required'=>true)) }}
    </div>
    <div class="col-md-12">
        {{ Form::submit('Registrar compra', array('class' => 'btn btn-primary')) }}
    
    </div>

</div>

{{ Form::close() }}


@endsection
