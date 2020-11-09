<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use App\Models\UserEloquent;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tableUsers = UserEloquent::all();
        return view('users.index', ["tableUsers" =>  $tableUsers ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $tablerol = roles::orderBy('nombre')->get()->pluck('nombre','id');
        return view('users.create',[ 'tablerol' => $tablerol ]);
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
            'name' => 'required|min:5|max:10',
            'password' => 'required|min:5|max:10',
            // 'email' => 'required|email|unique:users', // <-consulta a la bd
            'email' => 'required|email',
            // 'id_rol'=> 'required|exists:rol,id'
        ]);

        $usrExistente = UserEloquent::where('email', $request->email)->first();

        if($usrExistente){
            return Redirect()->route('users.create')->withErrors(['email' => 'Mi error'])->withInput();
        }

        $mUser = new UserEloquent();
        $mUser->fill($request->all());
        $mUser->password = bcrypt($mUser->password);
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Usuario creado!');
        return Redirect::to('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mUser = UserEloquent::find($id);
        return view('users.show', ["modelo" => $mUser]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mUser = UserEloquent::find($id);
        // $tablerol = roles::orderBy('nombre')->get()->pluck('nombre','id');
        return view('users.edit', ["modelo" => $mUser, 'tablerol' => $tablerol]);
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
            'name' => 'required|min:5|max:10',
            'password' => 'min:5|max:10',
            'email' => 'required|email',
            // 'id_rol' => 'required|exists:rol,id'
        ]);

        $mUser = UserEloquent::find($id);
        $mUser->name       = $request->name;
        $mUser->email      = $request->email;
        // $mUser->id_rol = $request->id_rol;
        $mUser->updated_at = date('Y-m-d H:i:s');
        if($request->password != '*****'){
            $mUser->password = bcrypt($request->password);
        }
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Usuario actualizado!');
        return Redirect::to('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mUser = UserEloquent::find($id);
        $mUser->delete();

        Session::flash('message', 'Usuario eliminado!');
        return Redirect::to('users');
    }
}
