<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use App\Models\roles;

class rolcontroller extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        $tablerol = roles::all();
        return view('roles.index', ["tablerol" =>  $tablerol]);
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:20',
        ]);

        $mUser = new roles();
        $mUser->fill($request->all());
        // if($request->activo){
        //     $mUser->activo = true;
        // } else {
        //     $mUser->activo = false;
        // }
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'rol creado!');
        return Redirect::to('roles');
    }

    public function show($id)
    {
        $mUser = roles::find($id);
        return view('roles.show', ["modelo" => $mUser]);
    }

    public function edit($id)
    {
        $mUser = roles::find($id);
        return view('roles.edit', ["modelo" => $mUser]);
    }

    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:100'
        ]);

        $mUser = roles::find($id);
        $mUser->nombre       = $request->nombre;
        // if($request->activo){
        //     $mUser->activo = true;
        // } else {
        //     $mUser->activo = false;
        // }
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'rol actualizado!');
        return Redirect::to('roles');
    }

    public function destroy($id)
    {
        $mUser = roles::find($id);
        $mUser->delete();

        Session::flash('message', 'rol eliminado!');
        return Redirect::to('roles');
    }
}
