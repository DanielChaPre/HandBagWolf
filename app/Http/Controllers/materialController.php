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
        return view('materiales.index', ['tableMaterial' => $tableMaterial ]);
    }

    public function create()
    {
        return view('materiales.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:20',
            'cantidad' => 'required|numeric|min:0',
            'tipo' => 'required|min:3|max:20',
            'descripcion' => 'required|min:3|max:200',
            'Precio' => 'required|numeric|min:0',
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
        return view('materiales.edit', ["modelo" => $Material]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:20',
            'cantidad' => 'required|numeric|min:0',
            'tipo' => 'required|min:3|max:20',
            'descripcion' => 'required|min:3|max:200',
            'Precio' => 'required|numeric|min:0',
        ]);

        $mUser = Materiales::find($id);
        $mUser->nombre       = $request->nombre;
        $mUser->cantidad      = $request->cantidad;
        $mUser->tipo      = $request->tipo;
        $mUser->descripcion      = $request->descripcion;
        $mUser->Precio     = $request->Precio;
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
