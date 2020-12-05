@extends('layouts.plantilla')
@section('content')
<a style="margin-left:15px;" class="btn btn-primary pull-left" href="{{ URL::to('compra') }}">Regresar</a> <br> <br>

<h1 style="margin-left:500px;">Registro de compra</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'compra')) }}
<div class="row">
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

    <div class="form-group col-md-5">
        {{ Form::label('material', 'Material') }}
        {{ Form::select('idMaterial', $tableMateriales ,Request::old('idMaterial'),array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-5">
        {{ Form::label('cantidad', 'Cantidad') }}
        {{ Form::text('cantidad', Request::old('cantidad'),array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="col-md-12" >
        {{ Form::submit('Agregar Materiales', array('class' => 'btn btn-primary', 'name'=>'btn_material','value'=>'btn_material')) }}
    </div>
    <br><br><br>
    <div class="col-md-12">
        {{ Form::submit('Registrar compra', array('class' => 'btn btn-primary')) }}

    </div>

</div>

{{ Form::close() }}
<br>
<table class="table table-responsive-md">
    <thead>
    <tr><th>idMaterial</th>
    <th>cantidad</th>
    <th>Costo Unitario</th>
    </tr>
    </thead>
    <tbody>
        @foreach($materiales as $material)
            <tr>
            <td>{{$material['idMaterial']}}</td>
            <td>{{$material['cantidad']}}</td>
            <td>{{$material['constounitario']}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
