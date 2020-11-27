<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
Use Redirect;
use App\Models\DetalleCompra;
use App\Models\Compra;
use App\Models\Proveedores;
use Illuminate\Support\Facades\DB;

class compraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tablaDetalleCompra = DB::table('compra')
        ->join('proveedor', 'compra.idProveedor', '=', 'proveedor.id')
        ->select('compra.*', 'proveedor.nombre as nombre')
        ->get();
        //print_r($request->name);
        if($request->name){
            $tablaDetalleCompra=$tablaDetalleCompra->where('folio', '=', $request->name);
        }
        //print_r($tablaDetalleCompra);
        return view('compra.index', ["tablaDetalleCompra" =>$tablaDetalleCompra, "filtroNombre" => $request->name]);      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $mUser = Almacen::find($id);
       $idPro = $id;
       $tablaDetalleCompra = DB::table('dcompra')
       ->join('compra', 'dcompra.idCompra', '=', 'compra.id')
       ->select('dcompra.*')
       ->where('dcompra.idCompra', '=', $id)
       ->get();
       /*if($idPro){
        $tablaDetalleCompra=$tablaDetalleCompra->where('idCompra', 'like', '%'. $idPro.'%');
        }*/
        return view('compra.show', ["tablaDetalleCompra" =>$tablaDetalleCompra, "idPro" => $idPro]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tableProveedor = Proveedores::orderBy('nombre')->get()->pluck('nombre','id');
        return view('compra.create',[ 'tableProveedor' => $tableProveedor ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'folio' => 'required|min:7|max:7',
            'descripcion' => 'required|min:5|max:100',
            'idProveedor' => 'required'
        ]);

        $mUser = new Compra();
        $mUser->fill($request->all());
        $mUser->constotal = 0;
        // if($request->activo){
        //     $mUser->activo = true;
        // } else {
        //     $mUser->activo = false;
        // }
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Compra registrada!');
        return Redirect::to('almacen');
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $idComp = $id;
        return view('compra.addProducto', ["idComp" => $idComp]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //print_r($request);
        $validatedData = $request->validate([
            'producto' => 'required|min:5|max:100',
            'cantidad' => 'required',
            'constounitario' => 'required'
        ]);

        $mUser = new DetalleCompra();
        $mUser->producto       = $request->producto;
        $mUser->cantidad       = $request->cantidad;
        $mUser->constounitario       = $request->constounitario;
        $mUser->costoTotalxP  = ($request->cantidad * $request->constounitario);
        $mUser->idCompra = $id;

        $mUser->save();

        $mCompra = Compra::find($id);
        $mCompra->constotal = ($mCompra->constotal + ($request->cantidad * $request->constounitario));
        
        $mCompra->save();
        // Regresa a lista de usuario
        Session::flash('message', 'Producto guardado!');
        return Redirect::to('compra');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mUser = DetalleCompra::find($id);

        $mCompra = Compra::find($id);
        $mCompra->constotal = ($mCompra->constotal - ($mUser->costoTotalxP));
          $mCompra->save();

        $mUser->delete();

        Session::flash('message', 'Producto eliminado!');
        return Redirect::to('almacen');
    }


}
