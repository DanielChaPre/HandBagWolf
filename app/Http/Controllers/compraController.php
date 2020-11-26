<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
Use Redirect;
use App\Models\DetalleCompra;
use App\Models\Compra;
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
        if($request->folio){
            $tablaDetalleCompra=$tablaDetalleCompra->where('folio', 'like', '%'. $request->folio.'%');
        }
        return view('compra.index', ["tablaDetalleCompra" =>$tablaDetalleCompra, "filtroNombre" => $request->folio]);      
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
       ->get();
        return view('compra.show', ["tablaDetalleCompra" =>$tablaDetalleCompra, "idPro" => $idPro]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('almacen.create');
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
            'descripcion' => 'required|min:5|max:100',
            'ubicacion' => 'required|min:5|max:100',
            'tipo_material' => 'required|min:5|max:100'
        ]);

        $mUser = new Almacen();
        $mUser->fill($request->all());
        // if($request->activo){
        //     $mUser->activo = true;
        // } else {
        //     $mUser->activo = false;
        // }
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Almacen creado!');
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
        $mUser->$idCompra = $id;

        $mUser->save();

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
        $mUser = Almacen::find($id);
        $mUser->delete();

        Session::flash('message', 'Almacen eliminado!');
        return Redirect::to('almacen');
    }


}
