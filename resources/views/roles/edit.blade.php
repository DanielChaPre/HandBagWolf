@extends('layouts.plantilla')
@section('content')
<h1 style="margin-left:500px;">Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('roles.update', $modelo->id), 'method' => 'PUT') ) }}

<div class="form-horizontal" style="margin-left:500px;">

    <div class="form-group">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', null,
           array('class' => 'form-control', 'required'=>true)) }}
    </div>
    <div>
        {{ Form::submit('Actualizar rol', array('class' => 'btn btn-primary')) }}
    </div>

</div>
{{ Form::close() }}

@endsection
