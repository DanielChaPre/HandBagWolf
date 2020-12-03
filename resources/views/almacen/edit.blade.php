@extends('layouts.plantilla')
@section('content')
<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{ route('almacen.show', $modelo->id) }}">Regresar</a> <br> <br>
<h1 style="margin-left:500px;">Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('almacen.update', $modelo->id), 'method' => 'PUT') ) }}

<div class="form-horizontal" style="margin-left:500px;">
    <div class="form-group col-md-5">
        {{ Form::label('descripcion', 'Descripcion') }}
        {{ Form::text('descripcion', Request::old('descripcion'),array('class' => 'form-control', 'required'=>true)) }}
    </div>
    <div class="form-group col-md-5">
        {{ Form::label('ubicacion', 'Ubicacion') }}
        {{ Form::text('ubicacion', Request::old('ubicacion'),array('class' => 'form-control', 'required'=>true)) }}
    </div>
    <div class="form-group col-md-5">
        {{ Form::label('tipo_material', 'Tipo almacen') }}
        <select class="form-control" name="tipo_material" id="tipo_material">
            <option value="Proucto">Proucto</option>
            <option value="Material">Material</option>
            <option value="Mermas">Mermas</option>
        </select>
    </div>

    <div class="col-md-12"style="margin-left:70px;" >
        {{ Form::submit('Actualizar Almacen', array('class' => 'btn btn-primary')) }}

    </div>

</div>
{{ Form::close() }}

@endsection
