<?php

namespace App\Http\Controllers;


use Session;
Use Redirect;
use Illuminate\Http\Request;
use App\Models\UserEloquent;
use App\Models\Empleados;
use App\Models\Persona;
use Illuminate\Support\Facades\DB;

class empleadoController extends Controller
{

    public function index(){
    $tableEmpleado = DB::select( 'select * from persona');
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

        $data= DB::statement(
            'call CrearEmpleado( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',

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


    
        Session::flash('message', 'Empleado Creado!');
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
        $tableEmpleado = UserEloquent::orderBy('name')->get()->pluck('name','id');
        //$tablePersona = Persona::orderBy('nombre')->get()->pluck('nombre','id');
        return view('empleados.edit', ["modelo" => $mUser],[ 'tableEmpleado' => $tableEmpleado]);
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
            'call actualizarEmpleado( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',

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

        //$mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Datos del Empleado Actualizados');
        return Redirect::to('empleados');
    }

    public function destroy($id)
    {
        
        $data= DB::statement('call eliminarEmpleado( ?)',
            array(
                $id, 
            ));


        Session::flash('message', 'Empleado eliminado!');
        return Redirect::to('empleados');
    }
}
