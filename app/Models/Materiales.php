<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiales extends Model
{
    use HasFactory;

    protected $table = 'materiales';

    protected $fillable = ['nombre', 'cantidad', 'tipo', 'descripcion', 'precio', 'id_uni'];

    public function getUni()
    {
    //Modelo de referencia, campo local, campo foráneo
        return $this->belongsTo('App\Models\Unidad','id_uni','id');
    }
}
