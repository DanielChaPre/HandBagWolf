@extends('layouts.internal')
@section('content')

<a href="{{route('materiales.create')}}">Registrar rol</a> <br> <br>
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
        @foreach($tableMaterial as $rowUser)
            <tr>
                <td>
                    <a href="{{route('materiales.show', $rowUser->id)}}">{{$rowUser->nombre}}</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
