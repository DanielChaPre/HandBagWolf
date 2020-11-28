@extends('layouts.plantilla')
@section('content')

<a href="{{route('compra.create')}}">Registrar Compra</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<form>
<div class="form-group">
    <div class="form-group col-md-3">
        <label for="name">Filtrar por folio</label>
        <input type="text" name="name" value="{{$filtroNombre}}" class="form-control">

    </div>
    <div class="col-md-10">
            <button class="btn btn-secondary">Buscar</button>
    </div>
</div>

</thead>
    <tbody>
        @foreach($tablaDetalleCompra as $rowCompra)
            <tr>
                <td>
                    <a class="btn" href="{{route('compra.show', $rowCompra->id)}}">Detalle</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
