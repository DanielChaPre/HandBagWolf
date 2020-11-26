<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $table = 'compra';

    protected $fillable = ['id','folio' ,'descripcion', 'nombre', 'constotal', 'idProveedor'];

    public function getcProveedor(){
        return $this->belongsTo('App\Models\Proveedores','idProveedor','id');
    }
}
