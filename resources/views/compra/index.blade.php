@extends('layouts.plantilla')
@section('content')

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{route('compra.create')}}">Registrar Compra</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<form>
<div class="form-group">
    <div class="form-group col-md-3">
        <label for="name">Filtrar por folio</label>
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
            <th>Folio</th>
            <th>Proveedor</th>
            <th>Descripción</th>
            <th>Costo total</th>
            <th>Ver detalle</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tablaDetalleCompra as $rowCompra)
            <tr>
                <td>
                <a >{{$rowCompra->folio}}</a>
                </td>
                <td>
                <a >{{$rowCompra->nombre}}</a>
                </td>
                <td>
                <a >{{$rowCompra->descripcion}}</a>
                </td>
                <td>
                     <a >{{$rowCompra->constotal}}</a>
                </td>
                <td>
                    <a class="btn" href="{{route('compra.show', $rowCompra->id)}}">Detalle</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
