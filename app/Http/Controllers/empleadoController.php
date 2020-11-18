<?php

namespace App\Http\Controllers;


use Session;
Use Redirect;
use Illuminate\Http\Request;
use App\Models\UserEloquent;
use App\Models\Empleados;

class empleadoController extends Controller
{

    public function index(){
    $tableEmpleado = Empleados::all();
        return view('empleados.index', ["tableEmpleado" =>  $tableEmpleado]);
    }


    public function create()
    {

        $tableEmpleado = UserEloquent::orderBy('name')->get()->pluck('name','id');
        return view('empleados.create',[ 'tableEmpleado' => $tableEmpleado ]);
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

        $mUser = new Empleados();
        $mUser->fill($request->all());
       
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Empleado creado!');
        return Redirect::to('empleados');
    

    }


    public function show($id)
    {
        $mUser = Empleados::find($id);
        return view('empleados.show', ["modelo" => $mUser]);
    }

    public function edit($id)
    {
        $mUser = Empleados::find($id);
        $tableEmpleado = UserEloquent::orderBy('idUsuario')->get()->pluck('idUsuario','id');
        $tablePersona = Persona::orderBy('idPersona')->get()->pluck('idPersona','id');
        return view('empleados.edit', ["modelo" => $mUser, 'tableEmpleado' => $tableEmpleado,'tablePersona=' => $tablePersona]);
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            
            'nombre' => 'required|min:5|max:100',
            'apellido' => 'required|min:5|max:100',
            'fechaNac' => 'required|fechaNac',
            'colonia' => 'required|colonia',
            'calle' => 'required|calle',
            'numExt' => 'required|NumExt',
            'cp' => 'required|cp',
            'correo' => 'required|correo',
            'telefono' => 'required|min:5|max:20',
            'rfc' => 'required|min:5|max:100',
            'idUsuario'=> 'required|exists:User,id'
        ]);


        $mUser = Empleados::find($id);
        $mUser->nombre       = $request->nombre;
        $mUser->apellido     = $request->apellido;
        $mUser->fechaNac     = $request->fechaNac;
        $mUser->colonia      = $request->colonia;
        $mUser->calle        = $request->calle;
        $mUser->numExt       = $request->numExt;
        $mUser->cp           = $request->cp;
        $mUser->correo       = $request->correo;
        $mUser->telefono     = $request->telefono;
        $mUser->rfc          = $request->rfc;
        $mUser->correo       = $request->correo;
        $mUser->idUsuario = $request->idUsuario;

        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Empleado actualizado!');
        return Redirect::to('empleados');
    }

    public function destroy($id)
    {
        $mUser = Empleados::find($id);
        $mUser->delete();

        Session::flash('message', 'Empleado eliminado!');
        return Redirect::to('empleados');
    }
}
