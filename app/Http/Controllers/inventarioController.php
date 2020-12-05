<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Producto;
use App\Models\inventario;
use Illuminate\Support\Facades\DB;

class inventarioController extends Controller
{

    public function store($id, Request $request)
    {
        $validatedData = $request->validate([
            'cantidad' => 'required'
        ]);
        $data= DB::statement(
            'call actInve( ?, ?)',
            array(
                $request->input('cantidad'),
                $id
            )
        );

        $cantidad = inventario::find($id)->cantidad;

        return $cantidad;
        /** call actInve(5,5); */
        // $mProducto = Producto::find($id);
        //  $mProducto->fill($request->all());
        //  $mProducto->save();
        //  Session::flash('message', 'Producto actualizado!');
        //  return Redirect::to('productos');

    }
}
