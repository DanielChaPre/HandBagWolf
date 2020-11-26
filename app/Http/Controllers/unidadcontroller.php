<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unidad;

class unidadcontroller extends Controller
{
    public function index(Request $request)
    {
        $whereClause = [];
        if($request->nombre){
            array_push($whereClause, [ "nombre" ,'like', '%'.$request->nombre.'%' ]);
        }
        $tableunidad = Unidad::orderBy('nombre')->where($whereClause)->get();
        return view('unidad.index', ["tableunidad" =>  $tableunidad, "filtroNombre" => $request->nombre]);
    }

    public function create()
    {
        return view('unidad.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:20',
        ]);

        $mUser = new Unidad();
        $mUser->fill($request->all());
        $mUser->save();

        // Regresa a lista de rol
        Session::flash('message', 'unidad creado!');
        return Redirect::to('unidad');
    }

    public function show($id)
    {
        $mUser = Unidad::find($id);
        return view('unidad.show', ["modelo" => $mUser]);
    }

    public function edit($id)
    {
        $mUser = Unidad::find($id);
        return view('unidad.edit', ["modelo" => $mUser]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:100'
        ]);

        $mUser = Unidad::find($id);
        $mUser->nombre       = $request->nombre;
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Unidad actualizado!');
        return Redirect::to('unidad');
    }

    public function destroy($id)
    {
        $mUser = Unidad::find($id);
        $mUser->delete();

        Session::flash('message', 'unidad eliminado!');
        return Redirect::to('unidad');
    }
}
