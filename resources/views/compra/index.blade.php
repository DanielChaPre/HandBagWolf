@extends('layouts.plantilla')
@section('content')

<a href="{{route('compra.create')}}">Registrar Compra</a> <br> <br>
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
            <th>Proveedor</th>
            <th>Descripción</th>
            <th>Producto</th>
            <th>Costo unitario</th>
            <th>Cantidad</th>
            <th></th>
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
