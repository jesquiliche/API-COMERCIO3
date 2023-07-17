<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = ['nombre'];
    use HasFactory;

    function productos(){
        return $this->hasMany('App\Models\Producto');    
    }

}
