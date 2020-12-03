@extends('layouts.plantilla')
@section('content')
<form>
<div class="form-group" style="margin-top:20px;">
    <div class="form-group">
        <label for="nombre" class="col-xs-4 col-md-5 control-label">Filtrar por estatus:</label>
        <div class="col-xs-7 col-md-3">
            <select name="estatus" id="estatus" class="form-control">
                <option value="Pendiente">Pendiente</option>
                <option value="Cancelado">Cancelado</option>
                <option value="Cerrado">Cerrado</option>
            </select>
        </div>
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
            <th>Producto</th>
            <th>CostoTotal</th>
            <th>Estatus</th>
            <th>Fecha Entrega</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tablaVenta ?? '' as $rowVenta)
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
                    <a >{{$rowVenta->nombreProducto}}</a>
                </td>
                <td>
                     <a >{{$rowVenta->costoTotal}}</a>
                </td>
                <td>
                     <a >{{$rowVenta->Estatus}}</a>
                </td>
                <td>
                     <a >{{substr($rowVenta->fechaEntrega,0,10)}}</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection