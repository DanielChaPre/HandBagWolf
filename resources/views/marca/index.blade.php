@extends('layouts.plantilla')
@section('content')

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{route('marca.create')}}">Registrar Marca</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<form class="form-group">
    <div class="form-group">
        <div class="form-group col-md-3">
            <label for="nombre">Filtrar por nombre</label>
            <input type="text" name="nombre" value="{{$filtroNombre}}" class="form-control">
        </div>
        <div class="col-md-10">
            <button class="btn btn-secondary">Buscar</button>
        </div>
    </div>

</form>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Ver detalle</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tablemarca as $rowMarca)
            <tr>
                <td>
                <a >{{$rowMarca->nombre}}</a>
                </td>
                <td>
                <a class="btn" href="{{route('marca.show', $rowMarca->id)}}">Detalle</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
