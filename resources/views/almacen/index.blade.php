@extends('layouts.plantilla')
@section('content')

<a href="{{route('almacen.create')}}">Registrar Almacen</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<form>
<div class="form-group">
    <div class="form-group col-md-3">
        <label for="name">Filtrar por descripcion</label>
        <input type="text" name="name" value="{{$filtroNombre}}" class="form-control">
        
    </div>
    <div class="col-md-10">
            <button class="btn btn-secondary">Buscar</button>
    </div>
</div>

</form>
<table class="table table-responsive-md">
    <thead>
        <tr>
            <th>Descripción</th>
            <th>Ubicación</th>
            <th>Tipo de material</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tablaAlmacen as $rowAlmacen)
            <tr>
                <td>
                <a href="{{route('almacen.show', $rowAlmacen->id)}}">{{$rowAlmacen->descripcion}}</a>
                </td>
                <td>
                <a >{{$rowAlmacen->ubicacion}}</a>
                </td>
                <td>
                <a >{{$rowAlmacen->tipo_material}}</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
