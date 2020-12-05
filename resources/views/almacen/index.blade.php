@extends('layouts.plantilla')
@section('content')

@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{route('almacen.create')}}">Registrar Almacen</a> <br> <br>

<form>
<div class="form-group">
    <div class="form-group col-md-3">
        <label for="descripcion">Filtrar por descripcion</label>
        <input type="text" name="descripcion" value="{{$filtroNombre}}" class="form-control">

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
            <th>Ver detalle</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tablaAlmacen as $rowAlmacen)
            <tr>
                <td>
                <a >{{$rowAlmacen->descripcion}}</a>
                </td>
                <td>
                <a >{{$rowAlmacen->ubicacion}}</a>
                </td>
                <td>
                <a >{{$rowAlmacen->tipo_material}}</a>
                </td>
                <td>
                    <a class="btn" href="{{route('almacen.show', $rowAlmacen->id)}}">Detalle</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
