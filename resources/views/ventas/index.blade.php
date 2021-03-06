@extends('layouts.plantilla')
@section('content')

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{route('ventas.create')}}">Registrar Venta</a> <br> <br>
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

</form>
<table class="table table-responsive-md">
    <thead>
        <tr>
            <th>Folio</th>
            <th>Cliente</th>
            <th>Vendedor</th>
            <th>Fecha Entrega</th>
            <th>CostoTotal</th>
            <th>Estatus</th>
            <th>Edición</th>
            <th>Ver detalle</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tablaVenta as $rowVenta)
            <tr>
                <td>
                <a >{{$rowVenta->Folio}}</a>
                </td>
                <td>
                <a >{{$rowVenta->nombreCliente}}</a>
                </td>
                <td>
                <a >{{$rowVenta->nombreEmpleado}}</a>
                </td>
                <td>
                     <a >{{$rowVenta->fechaEntrega}}</a>
                </td>
                <td>
                     <a >{{$rowVenta->costoTotal}}</a>
                </td>
                <td>
                     <a >{{$rowVenta->Estatus}}</a>
                </td>
                <td>
                    <a class="btn" href="{{route('ventas.edit', $rowVenta->id)}}">Editar</a>
                </td>
                <td>
                    <a class="btn" href="{{route('detalleventa.show', $rowVenta->id)}}">Detalle</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
