
@extends('layouts.internal')
@section('content')

<h1 style="text-align:center">Nuevo Producto</h1>

{{ Html::ul($errors->all()) }}
<div class="container">
{{ Form::open(array('url' => 'productos', 'enctype' => 'multipart/form-data')) }}

    <div class="row">

        <div class="form-group col-md-4">
            {{ Form::label('nombre', 'Nombre del producto') }}
            {{ Form::text('nombre', Request::old('nombre'),
            array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
        </div>

        <div class="form-group col-md-4">
            {{ Form::label('modelo', 'Modelo') }}
            {{ Form::text('modelo', Request::old('modelo'), 
            array('class' => 'form-control', 'required'=>true)) }}
        </div>

        <div class="form-group col-md-4">
            {{ Form::label('precio', 'Precio') }}
            {{ Form::number('precio', Request::old('precio'), 
            array('class' => 'form-control', 'required'=>true, 'step'=>'.01')) }}
        </div>


        <div class="form-group col-md-12">
            {{ Form::label('marca', 'Marca') }} <br>
            {{ Form::text('marca', Request::old('marca'),
            array('class' => 'form-control', 'required'=>true, 
            'maxlength'=> 200, 'rows'=>2)) }}
        </div>

        <div class="form-group col-md-3">
            {{ Form::label('tamaño', 'Tamaño') }}
            {{ Form::text('tamaño', Request::old('tamaño'),  
            array('class' => 'form-control')) }}
        </div>

        <div class="form-group col-md-3">
            {{ Form::label('tipo_material', 'Tipo de material') }}
            {{ Form::text('tipo_material', Request::old('tipo_material'),   
            array('class' => 'form-control')) }}
        </div>

        <div class="form-group col-md-3">
            {{ Form::label('imagen', 'Imagen')}} <br>
            {{ Form::file('imagen', ['accept'=>"image/x-png,image/gif,image/jpeg"]) }} <br>
        </div>
    

    </div>

        {{ Form::submit('Registrar', ['class' => 'btn btn-primary'] ) }}
        <a href="{{ URL::to('productos') }}" class="btn btn-danger">Regresar</a>
    {{ Form::close() }}
</div>
@endsection
