<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    use HasFactory;
    protected $table = 'dcompra';

    protected $fillable = ['id','producto','cantidad', 'constounitario', 
    'costoTotalxP', 'idCompra'];
}
