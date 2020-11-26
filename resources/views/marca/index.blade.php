@extends('layouts.internal')
@section('content')

<a href="{{route('marca.create')}}">Registrar Marca</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<form>
<div class="row">
<div class="form-group col-md-3">
<label for="name">Filtrar por nombre</label>
<input type="text" name="name" value="{{$filtroNombre}}" class="form-control">
</div>
</div>
<button>Buscar</button>
</form>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tablemarca as $rowMarca)
            <tr>
                <td>
                <a href="{{route('marca.show', $rowMarca->id)}}">{{$rowMarca->nombre}}</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
