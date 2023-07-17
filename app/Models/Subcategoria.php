<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'categoria_id'
    ];
    
    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }

    public function productos(){
        return $this->hasMany('App\Models\Producto');    
    }
}
