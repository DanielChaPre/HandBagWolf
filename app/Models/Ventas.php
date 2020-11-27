<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;

    protected $table = 'venta';

    protected $fillable = ['id','Folio','nombreCliente', 
    'nombreEmpleado', 'costoTotal', 'fechaEntrega', 
    'fechaRegistro', 'Estatus', 'idCliente', 'idEmpleado'];
}
