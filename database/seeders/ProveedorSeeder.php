<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedorSeeder extends Seeder
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
                "nif"=>"36566239B",
                "nombre"=>"ELECTROLUX S.A.",
                "cod_provincia"=>"08",
                "cod_postal"=>"08244",
                "calle"=>"América",
                "numero"=>100,
                "notas"=>"Pagos a 30,60 y 90 dias"
                           
            ],
            [
                "nif"=>"36566233X",
                "nombre"=>"ELECTRONORMA S.L",
                "cod_provincia"=>"08",
                "cod_postal"=>"08244",
                "calle"=>"Avda. Pallaresa",
                "numero"=>134,
                "notas"=>"Pagos a 30,60 y 90 dias"                
            ]
        ];
    
        DB::table('proveedores')->insert($data);
    }

}
