@extends('layouts.plantilla')
@section('content')

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{route('compra.index')}}">Regresar</a> <br><br>

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{route('compra.edit', $idPro)}}">Agregar producto</a>
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
        @foreach($tablaDetalleCompra as $rowCompra)
            <tr>
                <td>
                <a >{{$rowCompra->producto}}</a>
                </td>
                <td>
                <a >{{$rowCompra->cantidad}}</a>
                </td>
                <td>
                <a >{{$rowCompra->constounitario}}</a>
                </td>
                <td>
                     <a >{{$rowCompra->costoTotalxP}}</a>
                </td>
                <td>
                    {{ Form::open(array('url' => route('compra.destroy', $rowCompra->id), 'class' => '')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



@endsection
