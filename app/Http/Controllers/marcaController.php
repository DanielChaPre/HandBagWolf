<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use App\Models\Marca;

class marcaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $whereClause = [];
        if($request->nombre){
            array_push($whereClause, [ "nombre" ,'like', '%'.$request->nombre.'%' ]);
        }
        $tablemarca = Marca::orderBy('nombre')->where($whereClause)->get();
        return view('marca.index', ["tablemarca" =>  $tablemarca , "filtroNombre" => $request->nombre]);
    }

    public function create()
    {
        return view('marca.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nombre' => 'required|min:1|max:20',
        ]);

        $mUser = new Marca();
        $mUser->fill($request->all());
        // if($request->activo){
        //     $mUser->activo = true;
        // } else {
        //     $mUser->activo = false;
        // }
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Marca creado!');
        return Redirect::to('marca');
    }

    public function show($id)
    {
        $mUser = Marca::find($id);
        return view('marca.show', ["modelo" => $mUser]);
    }

    public function edit($id)
    {
        $mUser = Marca::find($id);
        return view('marca.edit', ["modelo" => $mUser]);
    }

    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:1|max:100'
        ]);

        $mUser = Marca::find($id);
        $mUser->nombre       = $request->nombre;
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Marca actualizado!');
        return Redirect::to('marca');
    }

    public function destroy($id)
    {
        $mUser = Marca::find($id);
        $mUser->delete();

        Session::flash('message', 'Marca eliminado!');
        return Redirect::to('marca');
    }
}
