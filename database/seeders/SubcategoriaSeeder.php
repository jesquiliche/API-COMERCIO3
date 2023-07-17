<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
        $data=[
            [
                "nombre"=>"Frigorificos",
                "descripcion"=>"Frigorificos",
                "categoria_id"=>1
            ],
            [
                "nombre"=>"Congeladores",
                "descripcion"=>"Congeladores",
                "categoria_id"=>1
            ],
            [
                "nombre"=>"Lavadoras",
                "descripcion"=>"Lavadoras",
                "categoria_id"=>1
            ],
            [
                "nombre"=>"Secadoras",
                "descripcion"=>"Secadoras",
                "categoria_id"=>1
            ],
           
            [
                "nombre"=>"Lavavajillas",
                "descripcion"=>"Lavabajillas",
                "categoria_id"=>1
            ],
            [
                "nombre"=>"Micro Ondas",
                "descripcion"=>"Micro Ondas",
                "categoria_id"=>1
            ],
            [
                "nombre"=>"Televisores",
                "descripcion"=>"Televisores",
                "categoria_id"=>2
            ],
          
            [
                "nombre"=>"Proyectores",
                "descripcion"=>"Proyectores",
                "categoria_id"=>2
            ],
            [
                "nombre"=>"Accesorios TV",
                "descripcion"=>"Accesorios TV",
                "categoria_id"=>2
            ],
          
            ];
            DB::table('subcategorias')->insert($data);
    }
}
