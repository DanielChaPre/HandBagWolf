@extends('layouts.plantilla')
@section('content')
<form>

</form>
<table class="table table-responsive-md">
    <thead>
        <tr>
            <th>Folio</th>
            <th>Descripcion</th>
            <th>Proveedor</th>
            <th>Material</th>
            <th>CostoTotal</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tablaVenta ?? '' as $rowVenta)
            <tr>
                <td>
                    <a >{{$rowVenta->folio}}</a>
                </td>
                <td>
                    <a >{{$rowVenta->descripcion}}</a>
                </td>
                <td>
                    <a >{{$rowVenta->nombreProveedor}}</a>
                </td>
                <td>
                    <a >{{$rowVenta->nombrematerial}}</a>
                </td>
                <td>
                     <a >{{$rowVenta->constotal}}</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection