<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;

    protected $table = 'venta';

    protected $fillable = ['id_cliente', 'id_usuario'. 'id_empleados','id_detalle', 'Total'];
}
