<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use App\Models\Materiales;

class materialController extends Controller
{
    public function index()
    {
        $tableMaterial = Materiales::all();
        return view('material.index', ['tableMaterial' -> $tableMaterial ])
    }

    public function create()
    {
        return view('material.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:20',
            'cantidad' => 'required|numeric|min:0'
            'tipo' => 'required|min:3|max:20'
            'descripcion' => 'required|min:3|max:20'
            'Precio' => 'required|numeric|min:0'
        ]);

        $mUser = new Materiales();
        $mUser->fill($request->all());
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Material creado!');
        return Redirect::to('material');
    }

    public function show($id)
    {
        $Material = Material::find($id);
        return view('material.show', ["modelo" => $Material]);
    }

    public function edit($id)
    {
        $Material = Material::find($id);
        return view('material.edit', ["modelo" => $Material]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:20',
            'cantidad' => 'required|numeric|min:0'
            'tipo' => 'required|min:3|max:20'
            'descripcion' => 'required|min:3|max:20'
            'Precio' => 'required|numeric|min:0'
        ]);

        $mUser = Material::find($id);
        $mUser->nombre       = $request->nombre;
        $mUser->cantidad      = $request->cantidad;
        $mUser->tipo      = $request->tipo;
        $mUser->descripcion      = $request->descripcion;
        $mUser->Precio     = $request->Precio;
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Material actualizado!');
        return Redirect::to('material');
    }

    public function destroy($id)
    {
        $mUser = UserEloquent::find($id);
        $mUser->delete();

        Session::flash('message', 'Material eliminado!');
        return Redirect::to('material');
    }
}
