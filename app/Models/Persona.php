<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'persona';

    protected $fillable = ['id',
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
                            'idUsuario'];



    public function getUsuario()
    {
    //Modelo de referencia, campo local, campo foráneo
        return $this->belongsTo('App\Models\User','idUsuario','id');
    }
}
