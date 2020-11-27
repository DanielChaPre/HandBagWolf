<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\Ventas;
use App\Models\UserEloquent;
use App\Models\Empleados;
use App\Models\Detalleventa;

class ventaController extends Controller
{

    public function index(Request $request)
    {
        $whereClause = [];
        if($request->nombre){
            array_push($whereClause, [ "nombre" ,'like', '%'.$request->nombre.'%' ]);
        }
        $tableUsers = Ventas::orderBy('nombre')->where($whereClause)->get();
        return view('ventas.index', ["tableUsers" =>  $tableUsers, "filtroNombre" => $request->nombre ]);
    }

    public function create()
    {
        $tableusuario = UserEloquent::orderBy('name')->get()->pluck('name','id');
        $tablecliente = Clientes::orderBy('nombre')->get()->pluck('nombre','id');
        $tableempleado = Empleados::orderBy('nombre')->get()->pluck('nombre','id');
        $tabledetalle = Detalleventa::orderBy('nombre')->get()->pluck('nombre','id');
        return view('ventas.create',[ 'tabledetalle' => $tabledetalle,'tableusuario' => $tableusuario,'tablecliente' => $tablecliente,'tableempleado' => $tableempleado ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:10',
            'Total' => 'required|numeric|min:0',
            'id_cliente'=> 'required|exists:cliente,id',
            'id_usuario'=> 'required|exists:users,id',
            'id_empleados'=> 'required|exists:empleado,id',
            'id_detalle'=> 'required|exists:detalleventa,id',
        ]);

        $mUser = new Ventas();
        $mUser->fill($request->all());
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'ventas creado!');
        return Redirect::to('ventas');
    }

    public function show($id)
    {
        $mUser = Ventas::find($id);
        $tableusuario = UserEloquent::orderBy('name')->get()->pluck('name','id');
        $tablecliente = Clientes::orderBy('nombre')->get()->pluck('nombre','id');
        $tableempleado = Empleados::orderBy('nombre')->get()->pluck('nombre','id');
        $tabledetalle = Detalleventa::orderBy('nombre')->get()->pluck('nombre','id');
        return view('ventas.show', ["modelo" => $mUser,'tabledetalle' => $tabledetalle,'tableusuario' => $tableusuario,'tablecliente' => $tablecliente,'tableempleado' => $tableempleado]);
    }

    public function edit($id)
    {
        $mUser = Ventas::find($id);
        $tableusuario = UserEloquent::orderBy('name')->get()->pluck('name','id');
        $tablecliente = Clientes::orderBy('nombre')->get()->pluck('nombre','id');
        $tableempleado = Empleados::orderBy('nombre')->get()->pluck('nombre','id');
        $tabledetalle = Detalleventa::orderBy('nombre')->get()->pluck('nombre','id');
        return view('ventas.edit', ["modelo" => $mUser,'tabledetalle' => $tabledetalle,'tableusuario' => $tableusuario,'tablecliente' => $tablecliente,'tableempleado' => $tableempleado ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:10',
            'Total' => 'required|numeric|min:0',
            'id_cliente'=> 'required|exists:cliente,id',
            'id_usuario'=> 'required|exists:users,id',
            'id_empleados'=> 'required|exists:empleado,id',
            'id_detalle'=> 'required|exists:detalleventa,id',
        ]);
        $mUser = Ventas::find($id);
        $mUser->nombre      = $request->nombre;
        $mUser->Total     = $request->Total;
        $mUser->id_cliente = $request->id_cliente;
        $mUser->id_usuario = $request->id_usuario;
        $mUser->id_empleados = $request->id_empleados;
        $mUser->id_detalle = $request->id_detalle;
        $mUser->save();

        Session::flash('message', 'venta actualizado!');
        return Redirect::to('ventas');
    }

    public function destroy($id)
    {
        $mUser = Ventas::find($id);
        $mUser->delete();
        Session::flash('message', 'venta eliminado!');
        return Redirect::to('ventas');
    }
}
