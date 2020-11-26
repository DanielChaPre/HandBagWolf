<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use App\Models\Materiales;
use App\Models\Unidad;

class materialController extends Controller
{
    public function index(Request $request)
    {
        $whereClause = [];
        if($request->nombre){
            array_push($whereClause, [ "nombre" ,'like', '%'.$request->nombre.'%' ]);
        }
        //$tableMaterial = Materiales::all();
        $tableMaterial = Materiales::orderBy('nombre')->where($whereClause)->get();
        return view('materiales.index', ['tableMaterial' => $tableMaterial,"filtroNombre" => $request->nombre ]);
    }

    public function create()
    {
        $tableunidad = Unidad::orderBy('nombre')->get()->pluck('nombre','id');
        return view('materiales.create',[ 'tableunidad' => $tableunidad ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:20',
            'cantidad' => 'required|numeric|min:0',
            'tipo' => 'required|min:3|max:20',
            'descripcion' => 'required|min:3|max:200',
            'precio' => 'required|numeric|min:0',
            'id_uni'=> 'required|exists:unidad,id'
        ]);

        $mUser = new Materiales();
        $mUser->fill($request->all());
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Material creado!');
        return Redirect::to('materiales');
    }

    public function show($id)
    {
        $Material = Materiales::find($id);
        return view('materiales.show', ["modelo" => $Material]);
    }

    public function edit($id)
    {
        $Material = Materiales::find($id);
        $tableunidad = Unidad::orderBy('nombre')->get()->pluck('nombre','id');
        return view('materiales.edit', ["modelo" => $Material, 'tableunidad' => $tableunidad]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:20',
            'cantidad' => 'required|numeric|min:0',
            'tipo' => 'required|min:3|max:20',
            'descripcion' => 'required|min:3|max:200',
            'precio' => 'required|numeric',
            'id_uni'=> 'required|exists:unidad,id'
        ]);

        $mUser = Materiales::find($id);
        $mUser->nombre       = $request->nombre;
        $mUser->cantidad      = $request->cantidad;
        $mUser->tipo      = $request->tipo;
        $mUser->descripcion      = $request->descripcion;
        $mUser->precio     = $request->precio;
        $mUser->id_uni = $request->id_uni;
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Material actualizado!');
        return Redirect::to('materiales');
    }

    public function destroy($id)
    {
        $mUser = Materiales::find($id);
        $mUser->delete();

        Session::flash('message', 'Material eliminado!');
        return Redirect::to('materiales');
    }
}
