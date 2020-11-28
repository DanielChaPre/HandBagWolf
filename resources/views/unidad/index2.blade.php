@extends('layouts.internal')
@section('content')

<a href="{{route('unidad.create')}}">Registrar unidad</a> <br> <br>
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
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableunidad as $rowUser)
            <tr>
                <td>
                    <a href="{{route('unidad.show', $rowUser->id)}}">{{$rowUser->nombre}}</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
