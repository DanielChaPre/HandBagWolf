<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
Use Redirect;
use App\Models\Almacen;

class almacenController extends Controller
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
        $whereClause = [];
        if($request->descripcion){
            array_push($whereClause, [ "descripcion" ,'like', '%'.$request->descripcion.'%' ]);
        }
        $tablaAlmacen = Almacen::orderBy('id')->where($whereClause)->get();
        return view('almacen.index', ["tablaAlmacen" =>  $tablaAlmacen , "filtroNombre" => $request->descripcion]);
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mUser = Almacen::find($id);
        return view('almacen.show', ["modelo" => $mUser]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mUser = Almacen::find($id);
        return view('almacen.edit', ["modelo" => $mUser]);
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
            'descripcion' => 'required|min:5|max:100',
            'ubicacion' => 'required|min:5|max:100',
            'tipo_material' => 'required|min:5|max:100'
        ]);

        $mUser = Almacen::find($id);
        $mUser->descripcion       = $request->descripcion;
        $mUser->ubicacion       = $request->ubicacion;
        $mUser->tipo_material       = $request->tipo_material;
        // if($request->activo){
        //     $mUser->activo = true;
        // } else {
        //     $mUser->activo = false;
        // }
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Almacen actualizado!');
        return Redirect::to('almacen');
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
