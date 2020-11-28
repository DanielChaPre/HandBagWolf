@extends('layouts.plantilla')
@section('content')

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{route('compra.edit', $idPro)}}">Agregar producto</a>
<br>
<table class="table table-responsive-md">
    <thead>
    </thead>
    <tbody>
        @foreach($tablaDetalleCompra as $rowCompra)
        <tr>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection
