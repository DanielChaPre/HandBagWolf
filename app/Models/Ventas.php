<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;

    protected $table = 'venta';

    protected $fillable = ['nombre','id_cliente', 'id_usuario', 'id_empleados','id_detalle', 'Total'];

    public function getUsuarios()
    {
    //Modelo de referencia, campo local, campo foráneo
        return $this->belongsTo('App\Models\User','id_usuario','id');
    }

    public function getCliente()
    {
    //Modelo de referencia, campo local, campo foráneo
        return $this->belongsTo('App\Models\Clientes','id_cliente','id');
    }

    public function getEmpleado()
    {
    //Modelo de referencia, campo local, campo foráneo
        return $this->belongsTo('App\Models\Empleados','id_empleados','id');
    }

    public function getdetalle()
    {
    //Modelo de referencia, campo local, campo foráneo
        return $this->belongsTo('App\Models\Detalleventa','id_detalle','id');
    }
}
