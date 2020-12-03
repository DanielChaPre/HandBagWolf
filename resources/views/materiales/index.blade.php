@extends('layouts.plantilla')
@section('content')

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{route('materiales.create')}}">Registrar Materiales</a> <br> <br>

@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<form>
<div class="form-group">
    <div class="form-group col-md-3">
        <label for="nombre">Filtrar por Nombre</label>
        <input type="text" name="nombre" value="{{$filtroNombre}}" class="form-control">

    </div>
    <div class="col-md-10">
            <button class="btn btn-secondary">Buscar</button>
    </div>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>ver detalle</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableMaterial as $rowUser)
            <tr>
                <td>
                    <a>{{$rowUser->nombre}}</a>
                </td>
                <td>{{$rowUser->cantidad}}</td>
                <td>{{$rowUser->precio}}</td>
                <td>
                    <a class="btn" href="{{route('materiales.show', $rowUser->id)}}">Detalle</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
