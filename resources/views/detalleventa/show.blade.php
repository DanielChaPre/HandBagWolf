@extends('layouts.plantilla')
@section('content')

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{route('detalleventa.edit', $idVenta)}}">Agregar producto</a>
<br>
<br>
<table class="table table-responsive-md">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio unitario</th>
            <th>Costo total</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tablaDetalleVenta as $rowVenta)
            <tr>
                <td>
                <a >{{$rowVenta->nombreProducto}}</a>
                </td>
                <td>
                <a >{{$rowVenta->cantidadproducto}}</a>
                </td>
                <td>
                <a >{{$rowVenta->preciounitario}}</a>
                </td>
                <td>
                     <a >{{$rowVenta->totalxproducto}}</a>
                </td>
                <td>
                    {{ Form::open(array('url' => route('detalleventa.destroy', $rowVenta->id), 'class' => '')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



@endsection
