@extends('layouts.plantilla')
@section('content')

<h1 style="margin-left:500px;">Registro de compra</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'compra')) }}

<div class="form-horizontal" style="margin-left:500px;">



</div>
{{ Form::close() }}


@endsection
