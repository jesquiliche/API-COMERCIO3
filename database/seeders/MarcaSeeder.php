<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
       
        [
            
            'nombre'=>"SAMSUNG"
        ],
        [
            
            'nombre'=>"XIAOMI"
        ],
        [
            
            'nombre'=>"SONY"
        ],
        [
            
            'nombre'=>"ACER"
        ],
        [
            
            'nombre'=>"LG"
        ],
        [
            
            'nombre'=>"LENOVO"
        ],
        [
            
            'nombre'=>"CORBERO"
        ],
        [
            
            'nombre'=>"PHILIPS"
        ],
        [
            
            'nombre'=>"APPLE"
        ],
        [
            
            'nombre'=>"AEG"
        ],
       
       
        ];
        DB::table('marcas')->insert($data);
        //
    }
}
