@extends('layouts.internal')
@section('content')

<a href="{{route('productos.create')}}" class="btn btn-primary">Registrar producto</a> <br> <br>
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
    <thead class="thead-dark">
        <tr>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableProductos as $rowProducto)
            <tr>
                <td>
                    <a href="{{route('productos.show', $rowProducto->id)}}">{{$rowProducto->nombre}}</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
