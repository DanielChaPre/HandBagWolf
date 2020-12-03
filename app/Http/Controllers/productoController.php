<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Marca;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $whereClause = [];
        if($request->nombre){
            array_push($whereClause, [ "nombre" ,'like', '%'.$request->nombre.'%' ]);
        }
        //$tableUsers, "filtroNombre" => $request->nombre ]);
        $tableProductos = Producto::orderBy('nombre')->where($whereClause)->get();
        return view('productos.index', ["tableProductos" =>  $tableProductos, "filtroNombre" => $request->nombre ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tableMarcaProductos = Marca::orderBy('nombre')->get()->pluck('nombre','id');
        return view("productos.create",[ 'tableMarcaProductos' => $tableMarcaProductos ]);
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
            'nombre' => 'required|min:5|max:100',
            'modelo' => 'required|min:5|max:50',
            'precio' => 'required|numeric|min:0',
            'tamaño' => 'required|min:5|max:10',
            'idMarca' => 'required',
            'tipo_material' => 'required|min:2|max:100'
        ]);
        $mProducto = new Producto($request->all());
        // if($request->activo){
        //     $mProducto->activo = true;
        // } else {
        //     $mProducto->activo = false;
        // }

        $mProducto->save();
        $file = $request->file('imagen');
        $file = $request->file('imagen');
        if($file){
            
            $imgNombreVirtual = $file->getClientOriginalName();
            $imgNombreFisico = $mProducto->id.'-'.$imgNombreVirtual;
            \Storage::disk('local')->put($imgNombreFisico, \File::get($file));
            $mProducto->imgNombreVirtual = $imgNombreVirtual;
            $mProducto->imgNombreFisico = $imgNombreFisico;
            $mProducto->save();
        }
        Session::flash('message', 'Producto creado!');
        return Redirect::to('productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelo = Producto::find($id);
        return view('productos.show', ["modelo" => $modelo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelo = Producto::find($id);
        $tableMarcaProductos = Marca::orderBy('nombre')->get()->pluck('nombre','id');
        return view('productos.edit', ["modelo" => $modelo],[ 'tableMarcaProductos' => $tableMarcaProductos ]);
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
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:100',
            'modelo' => 'required|min:5|max:50',
            'precio' => 'required|numeric|min:0',
            'id_marca' => 'required',
            'tamaño' => 'required|min:5|max:10',
            'tipo_material' => 'required|min:2|max:100'
        ]);
        $mProducto = Producto::find($id);
        $mProducto->fill($request->all());
        // if($request->activo){
        //     $mProducto->activo = true;
        // } else {
        //     $mProducto->activo = false;
        // }

        $mProducto->save();
        $file = $request->file('imagen');
        if($file){
            // echo var_dump($file);
            $imgNombreVirtual = $file->getClientOriginalName();
            $imgNombreFisico = $mProducto->id.'-'.$imgNombreVirtual;
            \Storage::disk('local')->put($imgNombreFisico, \File::get($file));
            $mProducto->imgNombreVirtual = $imgNombreVirtual;
            $mProducto->imgNombreFisico = $imgNombreFisico;
            $mProducto->save();
        }
        Session::flash('message', 'Producto actualizado!');
        return Redirect::to('productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mProducto = Producto::find($id);
        $mProducto->delete();
        Session::flash('message', 'Producto eliminado!');
        return Redirect::to('productos');
    }
}
