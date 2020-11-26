@extends('layouts.plantilla')
@section('content')

<h1 style="margin-left:500px;">Registro de almacenes</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'almacen')) }}
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

    <div class="col-md-12">
        {{ Form::submit('Registrar almacen', array('class' => 'btn btn-primary')) }}
    
    </div>

</div>

{{ Form::close() }}


@endsection
