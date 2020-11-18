<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;

    protected $table = 'persona';

    protected $fillable = ['idPersona',
                            'nombre',
                            'apellido',
                            'fechaNac',
                            'colonia',
                            'calle',
                            'numExt',
                            'cp',
                            'correo',
                            'telefono',
                            'rfc',
                            'idUsuario',];

    public function getPersona()
    {
    //Modelo de referencia, campo local, campo foráneo
        return $this->belongsTo('App\Models\Persona','idPersona','id');
    }

    public function getUsuario()
    {
    //Modelo de referencia, campo local, campo foráneo
        return $this->belongsTo('App\Models\User','idUsuario','id');
    }
}
