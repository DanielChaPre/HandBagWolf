@extends('layouts.plantilla')
@section('content')

<a href="{{route('productos.create')}}" class="btn btn-primary">Registrar producto</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
{{HTML::ul($errors->all())}}
<form>
<div class="form-group">
    <div class="ro">
    <div class="form-group col-md-3">
        <label for="nombre">Filtro por nombre</label>
        <input type="text" id="nombre" name="nombre" value="{{$filtroNombre}}" class="form-control">
        <button class="btn btn-secondary">Buscar</button>
    </div>
    </div>
</form>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Nombre</th>
            <th>Existencia</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableProductos as $rowProducto)
            <tr>
                <td>
                    <a href="{{route('productos.show', $rowProducto->id)}}">{{$rowProducto->nombre}}</a>
                </td>
                <td>
                    {{$rowProducto->cantidad}}
                </td>
                <td>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mymodal{{$rowProducto->id}}">Acualizar Existencia</button>
                <div id="mymodal{{$rowProducto->id}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Actualizar Cantidad</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                            </div>
                            <div class="modal-body">
                            {{ Form::model(  $tableProductos, array('route' => array('inventario.update', $rowProducto->idInventario), 'method' => 'PUT', 'enctype' => 'multipart/form-data') ) }}
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
