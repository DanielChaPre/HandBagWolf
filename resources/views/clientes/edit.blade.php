@extends('layouts.plantilla')
@section('content')

<div class="container">
<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{ route('clientes.show', $modelo->id) }}">Regresar</a> <br> <br>

<h1 style="margin-left:500px">Editar Clientes</h1>

{{ HTML::ul($errors->all()) }}

{{ Form:: model( $modelo, array('route' => array('clientes.update', $modelo->id), 'method'=> 'PUT') ) }}


<div class="row">

    <div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre',) }}
        {{ Form::text('nombre', Request::old('nombre'),array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('apellido', 'Apellido') }}
        {{ Form::text('apellido', null,
           array('class' => 'form-control', 'required'=>true)) }}
    </div>


    <div class="form-group col-md-4">
        {{ Form::label('fechaNac', 'Fecha de Nacimiento') }}
        {{ Form::text('fechaNac', null,
           array('class' => 'form-control', 'required'=>true)) }}
    </div>


    <div class="form-group col-md-4">
        {{ Form::label('colonia', 'Colonia') }}
        {{ Form::text('colonia', null,
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('calle', 'Calle') }}
        {{ Form::text('calle', null,
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('numExt', 'numExt') }}
        {{ Form::text('numExt', null,
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('cp', 'Codigo Postal') }}
        {{ Form::text('cp', null,
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('correo', 'Correo Electronico') }}
        {{ Form::text('correo', null,
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('telefono', 'Número de Telefono') }}
        {{ Form::text('telefono', null,
           array('class' => 'form-control', 'required'=>true)) }}
    </div>


    <div class="form-group col-md-4">
        {{ Form::label('rfc', 'RFC') }}
        {{ Form::text('rfc', null,
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('idUsuario', 'Usuario') }}
        {{ Form::select('idUsuario', $tableCliente, Request::old('idUsuario'),
           array('class' => 'form-control')) }}
    </div>


    <div class="form-group col-md-4" Style="visibility:hidden">
        {{ Form::text('id',  Request::old('id'),
           array('class' => 'form-control')) }}
    </div>

    <div class="col-md-12">
        {{ Form::submit('Actualizar Cliente', array('class' => 'btn btn-primary')) }}
    </div>

</div>

{{ Form::close() }}
</div>
@endsection
