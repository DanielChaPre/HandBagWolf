@extends('layouts.plantilla')
@section('content')

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{ route('roles.show', $modelo->id) }}">Regresar</a> <br> <br>

<h1 style="margin-left:500px;">Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('roles.update', $modelo->id), 'method' => 'PUT') ) }}

<div class="row">

    <div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', null,
           array('class' => 'form-control', 'required'=>true)) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::submit('Actualizar rol', array('class' => 'btn btn-primary')) }}
    </div>

</div>
{{ Form::close() }}

@endsection
