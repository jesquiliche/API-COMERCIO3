<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table="productos";
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'imagen',
        'subcategoria_id',
        'iva_id',
        'marca_id'
    ];

    public function subcategoria(){
        return $this->belongsTo('App\Models\Subcategoria');
    }

    public function iva(){
        return $this->belongsTo('App\Models\Iva');
    }
    public function marca(){
        return $this->belongsTo('App\Models\Marca');
    }
    public function oferta(){
        return $this->belongsTo('App\Models\Oferta');
    }
    //Relacion muchos a muchos
    public function proveedores(){
        return $this->belongsToMany(Producto::class);
    }
}
