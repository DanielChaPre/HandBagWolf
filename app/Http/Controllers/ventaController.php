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
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class ventaController extends Controller
{

    public function index(Request $request)
    {
        $tablaVenta = DB::table('venta')
        ->join('cliente', 'venta.idCliente', '=', 'cliente.id')
        ->join('empleado', 'venta.idEmpleado', '=', 'empleado.id')
        ->join('persona', 'empleado.idPersona', '=', 'persona.id')
        ->select('venta.*', 'cliente.nombre as nombreCliente',
         'persona.nombre as nombreEmpleado')
        ->get();
        if($request->name){
            $tablaVenta=$tablaVenta->where('Folio', '=', $request->name);
        }
        return view('ventas.index', ["tablaVenta" =>  $tablaVenta, "filtroNombre" => $request->name ]);
    }

    public function create(Request $request)
    {
        $tablecliente = Clientes::orderBy('nombre')->get()->pluck('nombre','id');
        $tableproducto = Producto::orderBy('nombre')->get()->pluck('nombre','id','precio');
        $tableempleado = Empleados::orderBy('id')->get()->pluck('nombre','id');
        $detalles = $request->session()->get('detalles');
        if(!$detalles){
        $detalles = [];
        }
        return view('ventas.create',['tablecliente' => $tablecliente,'tableempleado' => $tableempleado,'tableproducto' => $tableproducto,'detalles' => $detalles  ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fechaEntrega' => 'required',
            'idEmpleado'=> 'required',
            'idCliente'=> 'required',
            'Folio'=> 'required|min:7|max:7',
            'idProducto' => 'required',
            'cantidadproducto' => 'required',
        ]);
        if($request->fechaEntrega < $request->fechaRegistro){
            Session::flash('message', 'La fecha de entrega no puede ser menor a la fecha de registro');
            return Redirect::to('ventas');
        }

        $producto = Producto::find($request->idProducto);
        $detalles = $request->session()->get('detalles');
        if(!$detalles){
        $detalles = [];
        }
        if($request->btn_detalle){
            array_push($detalles, [
                'idProducto' => $request->idProducto,
                'cantidadproducto' => $request->cantidadproducto,
                'preciounitario' => $producto->precio,

                ] );


                $request->session()->put('detalles', $detalles);
            return Redirect()->route('ventas.create')->withErrors(['producto' => 'producto agregado'])->withInput();
        }



        $mven = new Ventas();
        $mven->fill($request->all());
        $mven->fechaRegistro = date('Y-m-d H:i:s');
        $mven->idEmpleado = ($request->idEmpleado);
        $mven->estatus = "Pendiente";
        $mven->costoTotal = 0;
        $mven->save();
        $total = 0;
        foreach($detalles as $detalle){
            $mUser = new Detalleventa();
            $mUser->cantidadproducto      = $detalle['cantidadproducto'];
            $mUser->preciounitario       = $detalle['preciounitario'];
            $mUser->totalxproducto       = (intval($detalle['cantidadproducto'] )*intval($detalle['preciounitario']));
            $mUser->idProducto  = $detalle['idProducto'];
            $mUser->idVenta = $mven->id;
            $mUser->save();
            $total+=$mUser->totalxproducto;
        }

        $mVenta = Ventas::find($mven->id);
        $mVenta->costoTotal = $total;
        $mVenta->save();
        $request->session()->put('detalles', []);
        // Regresa a lista de usuario
        Session::flash('message', 'ventas creado!');
         return Redirect::to('ventas');
        // echo($mVenta);
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
      //  $tableusuario = UserEloquent::orderBy('name')->get()->pluck('name','id');
      //  $tablecliente = Clientes::orderBy('nombre')->get()->pluck('nombre','id');
       // $tableempleado = Empleados::orderBy('nombre')->get()->pluck('nombre','id');
        //$tabledetalle = Detalleventa::orderBy('nombre')->get()->pluck('nombre','id');
        return view('ventas.edit', ["modelo" => $mUser]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Estatus' => 'required',
        ]);
        $mUser = Ventas::find($id);
        $mUser->Estatus = $request->Estatus;
        $mUser->save();

        Session::flash('message', 'estatus actualizado!');
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
