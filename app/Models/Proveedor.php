<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table="proveedores";
    use HasFactory;
    protected $fillable = [
        'nif',
        'nombre',
        'cod_postal',
        'cod_provincia',
        'calle',
        'numero',
        'notas'
    ];
    public function productos(){
        return $this->BelongsToMany('App\Models\Producto');
    }
}
