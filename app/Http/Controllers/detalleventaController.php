<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use App\Models\Detalleventa;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\Ventas;
use Illuminate\Support\Facades\DB;

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
        $idVenta = $id;
       $tablaDetalleVenta = DB::table('detalleventa')
       ->join('venta', 'detalleventa.idVenta', '=', 'venta.id')
       ->join('producto', 'detalleventa.idProducto', '=', 'producto.id')
       ->select('detalleventa.*', 'producto.nombre as nombreProducto')
       ->where('detalleventa.idVenta', '=', $id)
       ->get();
       /*if($idPro){
        $tablaDetalleCompra=$tablaDetalleCompra->where('idCompra', 'like', '%'. $idPro.'%');
        }*/
        return view('detalleventa.show', ["tablaDetalleVenta" =>$tablaDetalleVenta, "idVenta" => $idVenta]);
    }

    public function edit($id)
    {
        $idComp = $id;
        $tableproducto = Producto::orderBy('nombre')->get()->pluck('nombre','id');

        return view('detalleventa.edit', ["idComp" => $idComp, "tableproducto" => $tableproducto]);
        //return view('detalleventa.edit', ["modelo" => $mUser, 'tablepedido' => $tablepedido,'tableproducto' => $tableproducto]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'idProducto' => 'required',
            'cantidadproducto' => 'required',
            'preciounitario' => 'required'
        ]);

        $mUser = new Detalleventa();
        $mUser->cantidadproducto      = $request->cantidadproducto;
        $mUser->preciounitario       = $request->preciounitario;
        $mUser->totalxproducto       = ($request->cantidadproducto * $request->preciounitario);
        $mUser->idProducto  = $request->idProducto;
        $mUser->idVenta = $id;
        $mUser->save();

        $mVenta = Ventas::find($id);
        $mVenta->costoTotal = ($mVenta->costoTotal + ($request->cantidadproducto * $request->preciounitario));
        $mVenta->save();

        Session::flash('message', 'producto registrado!');
        return Redirect::to('ventas');
    }

    public function destroy($id)
    {
        $mUser = Detalleventa::find($id);

        $mVenta = Ventas::find($mUser->idVenta);
        $mVenta->costoTotal = ($mVenta->costoTotal - ($mUser->totalxprod));
        $mVenta->save();

        $mUser->delete();
        Session::flash('message', 'Detalleventa eliminado!');
        return Redirect::to('ventas');
    }
}
