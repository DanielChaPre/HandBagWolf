@extends('layouts.internal')
@section('content')

<a href="{{route('marca.create')}}">Registrar Marca</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
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
