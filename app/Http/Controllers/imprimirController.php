<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class imprimirController extends Controller
{
   /* public function imprimir(){
        
        $tablaVenta = DB::table('venta')
        ->join('cliente', 'venta.idCliente', '=', 'cliente.id')
        ->join('empleado', 'venta.idEmpleado', '=', 'empleado.id')
        ->join('persona', 'empleado.idPersona', '=', 'persona.id')
        ->join('detalleventa', 'detalleventa.idVenta', '=', 'venta.id')
        ->join('producto', 'detalleventa.idProducto', '=', 'producto.id')
        ->select('venta.*', 'cliente.nombre as nombreCliente',
         'persona.nombre as nombreEmpleado', 'producto.nombre as nombreProducto')
        ->get();

        $pdf = \PDF::loadView('rventas.index', $tablaVenta);
        return $pdf->download('Reporteventas.pdf');
    }*/
    public function imprimir(){
        $tablaVenta = DB::table('venta')
        ->join('cliente', 'venta.idCliente', '=', 'cliente.id')
        ->join('empleado', 'venta.idEmpleado', '=', 'empleado.id')
        ->join('persona', 'empleado.idPersona', '=', 'persona.id')
        ->join('detalleventa', 'detalleventa.idVenta', '=', 'venta.id')
        ->join('producto', 'detalleventa.idProducto', '=', 'producto.id')
        ->select('venta.*', 'cliente.nombre as nombreCliente',
         'persona.nombre as nombreEmpleado', 'producto.nombre as nombreProducto')
        ->get();

        $pdf = \PDF::loadView('rventas.index');
        return $pdf->download('Reporteventas.pdf');
    }
}
