@extends('layouts.internal')
@section('content')

<a href="{{route('detalleventa.create')}}">Registrar Detalleventa</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<form>
<div class="row">
<div class="form-group col-md-3">
<label for="nombre">Filtrar por nombre</label>
<input type="text" name="nombre" value="{{$filtroNombre}}" class="form-control">
</div>
</div>
<button>Buscar</button>
</form>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Pedido</th>
            <th>Nombre</th>
            <th>Producto</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableUsers as $rowUser)
            <tr>
                <td>{{$rowUser->id_pedido}}</td>
                <td>
                    <a href="{{route('detalleventa.show', $rowUser->id)}}">{{$rowUser->nombre}}</a>
                </td>
                <td>{{$rowUser->id_producto}}</td>
                <td>{{$rowUser->precio}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
