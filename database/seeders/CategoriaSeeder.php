<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
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
                "nombre"=>"Electrodomesticos",
                "descripcion"=>"Grandes electrodomesticos"
            ],
           
            [
                "nombre"=>"Televisión",
                "descripcion"=>"Pequeños electrodomesticos"
            ],
            [
                "nombre"=>"Telefonía",
                "descripcion"=>"Telefonía"
            ],
            [
                "nombre"=>"Ordenadores",
                "descripcion"=>"Pequeños electrodomesticos"
            ],
            [
                "nombre"=>"Cocinas",
                "descripcion"=>"Pequeños electrodomesticos"
            ],
            [
                "nombre"=>"Lavadoras",
                "descripcion"=>"Pequeños electrodomesticos"
            ],
            [
                "nombre"=>"Secadoras",
                "descripcion"=>"Pequeños electrodomesticos"
            ]

            ];
            DB::table('categorias')->insert($data);
    }
}

