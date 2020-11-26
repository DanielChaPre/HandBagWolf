<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use App\Models\Proveedores;

class proveedorController extends Controller
{

    public function index(Request $request)
    {
        $whereClause = [];
        if($request->nombre){
            array_push($whereClause, [ "nombre" ,'like', '%'.$request->nombre.'%' ]);
        }
        $tableprove = Proveedores::orderBy('nombre')->where($whereClause)->get();
        return view('proveedor.index', ['tableprove' => $tableprove,"filtroNombre" => $request->nombre ]);
    }

    public function create()
    {
        return view('proveedor.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:20',
            'direccion' => 'required|min:0|max:50',
            'contacto' => 'required|min:3|max:20',
        ]);
        $mUser = new Proveedores();
        $mUser->fill($request->all());
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'proveedor creado!');
        return Redirect::to('proveedor');
    }

    public function show($id)
    {
        $proveedor = Proveedores::find($id);
        return view('proveedor.show', ["modelo" => $proveedor]);
    }

    public function edit($id)
    {
        $proveedor = Proveedores::find($id);
        return view('proveedor.edit', ["modelo" => $proveedor]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:20',
            'direccion' => 'required|min:0|max:50',
            'contacto' => 'required|min:3|max:20',
        ]);

        $mUser = Proveedores::find($id);
        $mUser->nombre       = $request->nombre;
        $mUser->direccion      = $request->direccion;
        $mUser->contacto      = $request->contacto;
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'proveedor actualizado!');
        return Redirect::to('proveedor');
    }

    public function destroy($id)
    {
        $mUser = Proveedores::find($id);
        $mUser->delete();

        Session::flash('message', 'Proveedor eliminado!');
        return Redirect::to('proveedor');
    }
}
