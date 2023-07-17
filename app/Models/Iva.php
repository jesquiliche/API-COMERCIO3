<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iva extends Model
{
    use HasFactory;

    protected $fillable = ['tanto_porciento','nombre'];
    
    public function productos(){
        return $this->hasMany('App\Models\Producto');
        
    }
}
