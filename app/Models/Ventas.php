<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;

    protected $table = 'venta';

    protected $fillable = ['Fecha', 'Total', 'id_Cliente', 'id_Usuario'. 'id_Pedido','id_Producto'];
}
