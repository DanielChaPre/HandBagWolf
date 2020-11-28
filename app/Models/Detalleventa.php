<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalleventa extends Model
{
    use HasFactory;

    protected $table = 'detalleventa';

    protected $fillable = ['id', 'nombreProducto', 'cantidadproducto', 'preciounitario', 'totalxproducto', 'idProducto', 'idVenta'];


}
