@extends('layouts.internal')
@section('content')

<a href="{{route('clientes.create') }}">Registrar Cliente</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de Nacimiento</th>
            <th>Colonia</th>
            <th>Calle</th>
            <th>NumExt</th>
            <th>Codigo Postal</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>RFC</th>
        </tr>
    </thead>
    <tbody> 
        @foreach($tableCliente as $rowPersona)
            <tr>
                <td>
                    <a href="{{route('clientes.show', $rowPersona->id)}}">{{$rowPersona->nombre}}</a>
                </td>

                <td>
                    {{$rowPersona->apellido}}</a>
                </td>

                <td>
                    {{$rowPersona->fechaNac}}</a>
                </td>

                <td>
                    {{$rowPersona->colonia}}</a>
                </td>

                <td>
                    {{$rowPersona->calle}}</a>
                </td>

                <td>
                    {{$rowPersona->numExt}}</a>
                </td>

                <td>
                    {{$rowPersona->cp}}</a>
                </td>

                <td>
                    {{$rowPersona->correo}}</a>
                </td>

                <td>
                    {{$rowPersona->telefono}}</a>
                </td>

                <td>
                    {{$rowPersona->rfc}}</a>
                </td>

                
                <td>
                    <a href="{{route('clientes.show', $rowPersona->id)}}">{{$rowPersona->idUsuario}}</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
