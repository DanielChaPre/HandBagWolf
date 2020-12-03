<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\PDF;

class reporteVentaController extends Controller
{
    public function index(Request $request)
    {
        //print($request->estatus);
        $tablaVenta = DB::table('venta')
        ->join('cliente', 'venta.idCliente', '=', 'cliente.id')
        ->join('empleado', 'venta.idEmpleado', '=', 'empleado.id')
        ->join('persona', 'empleado.idPersona', '=', 'persona.id')
        ->join('detalleventa', 'detalleventa.idVenta', '=', 'venta.id')
        ->join('producto', 'detalleventa.idProducto', '=', 'producto.id')
        ->select('venta.*', 'cliente.nombre as nombreCliente',
         'persona.nombre as nombreEmpleado', 'producto.nombre as nombreProducto')
        ->get();

        //print_r($tablaVenta);
        if($request->estatus){
            $tablaVenta=$tablaVenta->where('Estatus', '=', $request->estatus);
        }
        //$tablaVenta->fechaEntrega = date_format($tablaVenta->fechaEntrega, "d/m/Y");
        return view('rventas.index', ["tablaVenta" =>  $tablaVenta,"estatus" => $request->estatus ]);
    }
}
