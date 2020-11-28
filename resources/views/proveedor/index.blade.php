@extends('layouts.plantilla')
@section('content')

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{route('proveedor.create')}}">Registrar Proveedor</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<form>
<div class="form-group" Style="margin-left:1150px">
    <div class="form-group col-md-6">
        <label for="name">Filtrar por Nombre</label>
        <input type="text" name="name" value="{{$filtroNombre}}" class="form-control">

    </div>
    <div class="col-md-10" >
            <button class="btn btn-secondary">Buscar</button>
    </div>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>contacto</th>
            <th>Ver Detalle</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableprove as $rowUser)
            <tr>
                <td>
                    <a>{{$rowUser->nombre}}</a>
                </td>
                <td>{{$rowUser->direccion}}</td>
                <td>{{$rowUser->contacto}}</td>
                <td>
                    <a class="btn" href="{{route('proveedor.show', $rowUser->id)}}">Detalle</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
