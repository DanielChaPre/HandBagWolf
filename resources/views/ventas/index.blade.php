@extends('layouts.internal')
@section('content')

<a href="{{route('ventas.create')}}">Registrar Ventas</a> <br> <br>
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
            <th>Cliente</th>
            <th>Nombre</th>
            <th>Usuario</th>
            <th>Empleados</th>
            <th>Detalle</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableUsers as $rowUser)
            <tr>
                <td>{{$rowUser->getCliente->nombre}}</td>
                <td>
                    <a href="{{route('ventas.show', $rowUser->id)}}">{{$rowUser->nombre}}</a>
                </td>
                <td>{{$rowUser->getUsuarios->name}}</td>
                <td>{{$rowUser->getEmpleado->nombre}}</td>
                <td>{{$rowUser->getdetalle->nombre}}</td>
                <td>{{$rowUser->Total}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
