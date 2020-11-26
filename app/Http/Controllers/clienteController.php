<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use App\Models\UserEloquent;
use App\Models\Empleados;
use App\Models\Persona;
use App\Models\Clientes;
use Illuminate\Support\Facades\DB;

class clienteController extends Controller
{

    public function index()
    {
        $tableCliente = DB::select( 'select * from persona');
        return view('clientes.index', ["tableCliente" =>  $tableCliente]);
    }

    public function create()
    {
        $tableCliente = UserEloquent::orderBy('name')->get()->pluck('name','id');
        return view('clientes.create',[ 'tableCliente' => $tableCliente ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
        

            'nombre' => 'required|min:5|max:100',
            'apellido' => 'required|min:5|max:100',
            'fechaNac' => 'required',
            'colonia' => 'required',
            'calle' => 'required',
            'numExt' => 'required',
            'cp' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'rfc' => 'required|min:5|max:100',
            'idUsuario'=> 'required'

        ]);

        $data= DB::statement(
            'call CrearCliente( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',

        array(
            $request->input('nombre'),
            $request->input('apellido'),
            $request->input('fechaNac'),
            $request->input('colonia'),
            $request->input('calle'),
            $request->input('numExt'),
            $request->input('cp'),
            $request->input('correo'),
            $request->input('telefono'),
            $request->input('rfc'),
            $request->input('idUsuario'),
        )
        );


    
        Session::flash('message', 'Cliente Creado!');
        return Redirect::to('clientes');
    
    }


    public function show($id)
    {
        $mUser = Clientes::find($id);
        return view('clientes.show', ["modelo" => $mUser]);
    }

    public function edit($id)
    {
        $mUser = Clientes::find($id);
        $tableCliente = UserEloquent::orderBy('name')->get()->pluck('name','id');   
        return view('clientes.edit', ["modelo" => $mUser],[ 'tableCliente' => $tableCliente]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            
            'nombre' => 'required|min:5|max:100',
            'apellido' => 'required|min:5|max:100',
            'fechaNac' => 'required',
            'colonia' => 'required',
            'calle' => 'required',
            'numExt' => 'required',
            'cp' => 'required',
            'correo' => 'required',
            'telefono' => 'required|min:5|max:20',
            'rfc' => 'required|min:5|max:100',
            'idUsuario'=> 'required'
        ]);

        $data= DB::statement(
            'call actualizarCliente( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',

        array(
            $request->id,
            $request->nombre,
            $request->apellido,
            $request->fechaNac,
            $request->colonia,
            $request->calle,
            $request->numExt,
            $request->cp,
            $request->correo,
            $request->telefono,
            $request->rfc,
            $request->idUsuario,
        )
        );

        Session::flash('message', 'Datos del Cliente Actualizados');
        return Redirect::to('clientes');
    }

    public function destroy($id)
    {
        $data= DB::statement('call eliminarCliente( ?)',
        array(
            $id,
        ));


    Session::flash('message', 'Cliente eliminado!');
    return Redirect::to('clientes');
    }
}
