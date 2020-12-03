@extends('layouts.plantilla')
@section('content')

<a style="margin-left:15px" class="btn btn-primary pull-left" href="{{route('clientes.create') }}">Registrar Cliente</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif

<form>
    <div class="Form-group">
        <div class="form-group col-md-3">
            <label for="nombre">Filtrar por nombre</label>
            <input type="text" name="nombre" value="{{$filtroNombre}}" class="form-control">
            <br>
            <button class="btn">Buscar</button>
        </div>

    </div>

</form>

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
            <th>VER DETALLE</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableCliente as $rowPersona)
            <tr>
                <td>
                    <a >{{$rowPersona->nombre}}</a>
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
                <a class="btn" href="{{route('clientes.show', $rowPersona->id)}}">Detalle</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
