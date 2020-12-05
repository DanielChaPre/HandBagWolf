<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reporteCompraController extends Controller
{
    public function index()
    {
        //print($request->estatus);
        $tablaVenta = DB::table('compra')
        ->join('proveedor', 'compra.idProveedor', '=', 'proveedor.id')
        ->join('dcompra', 'dcompra.idCompra', '=', 'compra.id')
        ->join('materiales', 'dcompra.idMaterial', '=', 'materiales.id')
        ->select('compra.*', 'proveedor.nombre as nombreProveedor',
        'materiales.nombre as nombrematerial')
        ->get();

        //$tablaVenta->fechaEntrega = date_format($tablaVenta->fechaEntrega, "d/m/Y");
        return view('rcompras.index', ["tablaVenta" =>  $tablaVenta]);
    }
}
