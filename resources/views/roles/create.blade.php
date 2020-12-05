@extends('layouts.plantilla')
@section('content')

<a style="margin-left:15px;" class="btn btn-primary pull-left" href="{{ URL::to('roles') }}">Regresar</a> <br> <br>

<h1 style="margin-left:500px;">Registro de Rol</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'roles')) }}

<div class="row">

    <div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', Request::old('nombre'),array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="col-md-12">
        {{ Form::submit('Registrar rol', array('class' => 'btn btn-primary')) }}
    </div>

</div>
{{ Form::close() }}


@endsection
