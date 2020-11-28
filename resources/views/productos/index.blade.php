@extends('layouts.plantilla')
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
            <th>Existencia</th>
            <th>Acualizar Existencia</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableProductos as $rowProducto)
            <tr>
                <td>
                    <a href="{{route('productos.show', $rowProducto->id)}}">{{$rowProducto->nombre}}</a>
                </td>
                <td>
                </td>
                <td>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open Modal</button>
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Actualizar Cantidad</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                            </div>
                            <div class="modal-body">
                            {{ Form::model(  $tableProductos, array('route' => array('inventario.update', $rowProducto->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data') ) }}
                                <p>{{$rowProducto->nombre}}</p>
                                <div class="form-group col-md-4">
                                    {{ Form::label('cantidad', 'cantidad') }}
                                    {{ Form::number('cantidad', Request::old('cantidad'),
                                    array('class' => 'form-control', 'required'=>true)) }}
                                </div>
                                {{ Form::submit('Registrar', ['class' => 'btn btn-primary'] ) }}
                            {{ Form::close() }}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            </div>

                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


<!-- Modal -->

@endsection
