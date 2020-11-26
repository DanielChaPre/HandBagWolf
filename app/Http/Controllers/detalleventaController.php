<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use App\Models\Detalleventa;
use App\Models\Pedido;
use App\Models\Producto;

class detalleventaController extends Controller
{

    public function index(Request $request)
    {
        $whereClause = [];
        if($request->nombre){
            array_push($whereClause, [ "nombre" ,'like', '%'.$request->nombre.'%' ]);
        }
        $tableUsers = Detalleventa::orderBy('nombre')->where($whereClause)->get();
        return view('detalleventa.index', ["tableUsers" =>  $tableUsers, "filtroNombre" => $request->nombre ]);
    }

    public function create()
    {
        $tablepedido = Pedido::orderBy('nombre')->get()->pluck('nombre','id');
        $tableproducto = Producto::orderBy('nombre')->get()->pluck('nombre','id');
        $tabledetalle = Detalleventa::orderBy('nombre')->get()->pluck('nombre','id');
        return view('detalleventa.create',[ 'tabledetalle' => $tabledetalle,'tablepedido' => $tablepedido,'tableproducto' => $tableproducto ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:10',
            'precio' => 'required|numeric|min:0',
            'id_pedido'=> 'required|exists:pedido,id',
            'id_producto'=> 'required|exists:producto,id',
        ]);

        $mUser = new Detalleventa();
        $mUser->fill($request->all());
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Detalleventa creado!');
        return Redirect::to('detalleventa');
    }

    public function show($id)
    {
        $mUser = Detalleventa::find($id);
        return view('detalleventa.show', ["modelo" => $mUser]);
    }

    public function edit($id)
    {
        $mUser = Detalleventa::find($id);
        $tablepedido = Pedido::orderBy('nombre')->get()->pluck('nombre','id');
        $tableproducto = Producto::orderBy('nombre')->get()->pluck('nombre','id');
        return view('detalleventa.edit', ["modelo" => $mUser, 'tablepedido' => $tablepedido,'tableproducto' => $tableproducto]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:10',
            'precio' => 'required|numeric|min:0',
            'id_pedido'=> 'required|exists:pedido,id',
            'id_producto'=> 'required|exists:producto,id',
        ]);
        $mUser = Detalleventa::find($id);
        $mUser->nombre      = $request->nombre;
        $mUser->precio     = $request->precio;
        $mUser->id_pedido = $request->id_pedido;
        $mUser->id_producto = $request->id_producto;
        $mUser->save();

        Session::flash('message', 'detalleventa actualizado!');
        return Redirect::to('detalleventa');
    }

    public function destroy($id)
    {
        $mUser = Detalleventa::find($id);
        $mUser->delete();
        Session::flash('message', 'Detalleventa eliminado!');
        return Redirect::to('detalleventa');
    }
}
