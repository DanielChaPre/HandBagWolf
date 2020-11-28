@extends('layouts.plantilla')
@section('content')

<a href="{{route('users.create')}}">Registrar usuario</a> <br> <br>

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
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Ver Detalles</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableUsers as $rowUser)
            <tr>
                <td>
                    <a>{{$rowUser->name}}</a>
                </td>
                <td>{{$rowUser->email}}</td>
                <td>{{$rowUser->getRol->nombre}}</td>
                <td>
                    <a class="btn" href="{{route('users.show', $rowUser->id)}}">Detalle</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
