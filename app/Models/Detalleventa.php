<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalleventa extends Model
{
    use HasFactory;

    protected $table = 'detalleventa';

    protected $fillable = ['nombre','id_pedido','id_producto','precio'];

    public function getPedido()
    {
    //Modelo de referencia, campo local, campo foráneo
        return $this->belongsTo('App\Models\Pedido','id_pedido','id');
    }

    public function getProducto()
    {
    //Modelo de referencia, campo local, campo foráneo
        return $this->belongsTo('App\Models\Producto','id_producto','id');
    }
}
