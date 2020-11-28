@extends('layouts.internal')
@section('content')

<a href="{{route('users.create')}}">Registrar usuario</a> <br> <br>
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
            <th>Correo</th>
            <th>Rol</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableUsers as $rowUser)
            <tr>
                <td>
                    <a href="{{route('users.show', $rowUser->id)}}">{{$rowUser->name}}</a>
                </td>
                <td>{{$rowUser->email}}</td>
                <td>{{$rowUser->getRol->nombre}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
