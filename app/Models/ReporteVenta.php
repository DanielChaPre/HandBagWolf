<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReporteVenta extends Model
{
    use HasFactory;

    protected $fillable = ['Folio', 'nombreCliente', 'nombreEmpleado',
        'nombreProducto','costoTotal', 'Estatus', 'fechaEntrega'];
}
