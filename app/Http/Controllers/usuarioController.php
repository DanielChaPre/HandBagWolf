<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use App\Models\UserEloquent;
use App\Models\roles;

class usuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function notificaciones()
    {
        return "Existen " . UserEloquent::count() . "users";
    }

    public function index(Request $request)
    {
        $whereClause = [];
        if($request->name){
            array_push($whereClause, [ "name" ,'like', '%'.$request->name.'%' ]);
        }
        //$tableUsers = UserEloquent::all();
        $tableUsers = UserEloquent::orderBy('name')->where($whereClause)->skip(1)->take(2)->get();
        return view('users.index', ["tableUsers" =>  $tableUsers, "filtroNombre" => $request->name ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tablerol = roles::orderBy('nombre')->get()->pluck('nombre','id');
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
            'id_rol'=> 'required|exists:rol,id'
        ]);

        $usrExistente = UserEloquent::where('email', $request->email)->first();

        if($usrExistente){
            return Redirect()->route('users.create')->withErrors(['email' => 'Correo ya Registrado'])->withInput();
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
        $tablerol = roles::orderBy('nombre')->get()->pluck('nombre','id');
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
            'id_rol' => 'required|exists:rol,id'
        ]);

        $mUser = UserEloquent::find($id);
        $mUser->name       = $request->name;
        $mUser->email      = $request->email;
        $mUser->id_rol = $request->id_rol;
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
