<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $table = 'compras';

    protected $fillable = ['id', 'descripcion', 'nombre', 'costototal', 'idProveedor'];

    public function getcProveedor(){
        return $this->belongsTo('App\Models\Proveedores','idProveedor','id');
    }
}
