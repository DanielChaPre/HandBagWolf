@extends('layouts.plantilla')
@section('content')

<h1 style="margin-left:500px;">Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('ventas.update', $modelo->id), 'method' => 'PUT') ) }}
<div class="form-group" style="margin-left:500px;">
    <div class="form-group col-md-3">
        {{ Form::label('Estatus', 'Estatus') }}
        <select name="Estatus" id="Estatus" class="form-control" old="Estatus">
            <option value="Pendiente">Pendiente</option>
            <option value="Cancelado">Cancelado</option>
            <option value="Cerrado">Cerrado</option>
        </select>
    </div>
    <div class="col-md-12" style="margin-left:0px;">
        {{ Form::submit('Actualizar estatus', array('class' => 'btn btn-primary')) }}
    </div>
{{ Form::close() }}

@endsection
