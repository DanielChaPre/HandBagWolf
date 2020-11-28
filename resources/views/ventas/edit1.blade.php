@extends('layouts.plantilla')
@section('content')
<h1 style="margin-left:500px;">Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('almacen.update', $modelo->id), 'method' => 'PUT') ) }}

<div class="form-horizontal" style="margin-left:500px;">


</div>
{{ Form::close() }}

@endsection
