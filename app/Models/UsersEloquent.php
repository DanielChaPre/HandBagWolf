<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersEloquent extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password'];

    // protected $fillable = ['name', 'email', 'password', 'id_rol'];

    // public function getRol()
    // {
    // Modelo de referencia, campo local, campo foráneo
    //     return $this->belongsTo('App\Models\roles','id_rol','id');
    // }
}
