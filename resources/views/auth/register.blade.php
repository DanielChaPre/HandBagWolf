@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_rol" class="col-md-4 col-form-label text-md-right" style="display:none;">{{ __('Rol_id') }}</label>

                            <div class="col-md-6">
                                <input id="id_rol" type="hidden" class="form-control @error('id_rol') is-invalid @enderror" name="id_rol" value="1" required autocomplete="id_rol" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="id_pedido" class="col-md-4 col-form-label text-md-right" style="display:none;">{{ __('Pedido_id') }}</label>

                            <div class="col-md-6">
                                <input id="id_pedido" type="hidden" class="form-control @error('id_pedido') is-invalid @enderror" name="id_pedido" value="1" required autocomplete="id_pedido" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="id_producto" class="col-md-4 col-form-label text-md-right" style="display:none;">{{ __('Producto_id') }}</label>

                            <div class="col-md-6">
                                <input id="id_producto" type="hidden" class="form-control @error('id_producto') is-invalid @enderror" name="id_producto" value="1" required autocomplete="id_producto" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="id_detalle" class="col-md-4 col-form-label text-md-right" style="display:none;">{{ __('Detalle_id') }}</label>

                            <div class="col-md-6">
                                <input id="id_detalle" type="hidden" class="form-control @error('id_detalle') is-invalid @enderror" name="id_detalle" value="1" required autocomplete="id_detalle" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="id_cliente" class="col-md-4 col-form-label text-md-right" style="display:none;">{{ __('Cliente_id') }}</label>

                            <div class="col-md-6">
                                <input id="id_cliente" type="hidden" class="form-control @error('id_cliente') is-invalid @enderror" name="id_cliente" value="1" required autocomplete="id_cliente" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="id_usuario" class="col-md-4 col-form-label text-md-right" style="display:none;">{{ __('Usuario_id') }}</label>

                            <div class="col-md-6">
                                <input id="id_usuario" type="hidden" class="form-control @error('id_usuario') is-invalid @enderror" name="id_usuario" value="1" required autocomplete="id_usuario" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="id_empleados" class="col-md-4 col-form-label text-md-right" style="display:none;">{{ __('Empleados_id') }}</label>

                            <div class="col-md-6">
                                <input id="id_empleados" type="hidden" class="form-control @error('id_empleados') is-invalid @enderror" name="id_empleados" value="1" required autocomplete="id_empleados" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="id_uni" class="col-md-4 col-form-label text-md-right" style="display:none;">{{ __('uni_id') }}</label>

                            <div class="col-md-6">
                                <input id="id_uni" type="hidden" class="form-control @error('id_uni') is-invalid @enderror" name="id_uni" value="1" required autocomplete="id_uni" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="idUsuario" class="col-md-4 col-form-label text-md-right" style="display:none;">{{ __('IdUsuario') }}</label>

                            <div class="col-md-6">
                                <input id="idUsuario" type="hidden" class="form-control @error('idUsuario') is-invalid @enderror" name="idUsuario" value="1" required autocomplete="idUsuario" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
