@extends('layouts.internal')
@section('content')

<a href="{{route('proveedor.create')}}">Registrar Proveedor</a> <br> <br>
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
        @foreach($tableprove as $rowUser)
            <tr>
                <td>
                    <a href="{{route('proveedor.show', $rowUser->id)}}">{{$rowUser->nombre}}</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
