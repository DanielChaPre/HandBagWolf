@extends('layouts.plantilla')
@section('content')

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{route('roles.create') }}">Registrar Rol</a> <br> <br>
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
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Ver detalle</th>
        </tr>
    </thead>
        <tbody>
            @foreach($tablerol as $rowUser)
                <tr>
                    <td>
                        <a>{{$rowUser->nombre}}</a>
                    </td>
                    <td>
                        <a class="btn" href="{{route('roles.show', $rowUser->id)}}">Detalle</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
</table>

@endsection
