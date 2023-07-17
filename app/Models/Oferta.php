<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;
    protected $fillable = [
        'precio',
        'descripcion',
        'fecha_ini',
        'fecha_fin',
        'producto_id'
    ];

    function productos(){
        return $this->hasMany('App\Models\Producto');    
    }
}
