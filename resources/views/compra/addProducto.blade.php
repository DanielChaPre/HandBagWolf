@extends('layouts.plantilla')
@section('content')

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{ route('compra.show', $idComp) }}">Regresar</a> <br> <br>

<h1 style="margin-left:500px;">Formulario de registro de productos</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('route' => array('compra.update', $idComp), 'method' => 'PUT') ) }}

<div class="row">
<div class="form-group col-md-5">
        {{ Form::label('producto', 'Material') }}
        {{ Form::text('producto', Request::old('producto'),array('class' => 'form-control', 'required'=>true)) }}
    </div>
    <div class="form-group col-md-5">
        {{ Form::label('cantidad', 'Cantidad') }}
        {{ Form::text('cantidad', Request::old('cantidad'),array('class' => 'form-control', 'required'=>true)) }}
    </div>
    <div class="form-group col-md-5">
        {{ Form::label('constounitario', 'Costo Unitario') }}
        {{ Form::text('constounitario', Request::old('costounitario'),array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="col-md-12"style="margin-left:70px;" >
        {{ Form::submit('Registrar producto', array('class' => 'btn btn-primary')) }}

    </div>

</div>
{{ Form::close() }}

@endsection
