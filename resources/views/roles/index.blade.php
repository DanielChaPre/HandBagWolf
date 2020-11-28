@extends('layouts.plantilla')
@section('content')

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
