<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
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
                "nombre"=>"Samsung WW90TA046AE/EC",
                "descripcion"=>"Lavadora carga frontal - Samsung WW90TA046AE/EC, 9 kg, 1400 rpm, EcoBubble, 14 programas, Blanco",
                "precio"=>469,
                "imagen"=>"/storage/img/fee_786_587_png.webp",
                "subcategoria_id"=>3,
                "iva_id"=>3,
                "marca_id"=>1,
                
            ],
            [
                "nombre"=>"Bosch WAN24264ES",
                "descripcion"=>"Lavadora carga frontal - Bosch WAN24264ES, 8 kg, 16 Programas, 1200 rpm, Blanco",
                "precio"=>449,
                "imagen"=>"/storage/img/fee_786_587_png.webp",
                "subcategoria_id"=>3,
                "iva_id"=>3, //BOSCH
                "marca_id"=>1,
                
            ],
            [
                "nombre"=>"Candy Smart Pro CSO 14105 TE/S",
                "descripcion"=>"Lavadora carga frontal - Candy Smart Pro CSO 14105 TE/S, 10 kg, 1400rpm, WIFI, Vapor, 9 Ciclos rápidos, Blanco
                ",
                "precio"=>349,
                "imagen"=>"/storage/img/candy_png.webp",
                "subcategoria_id"=>3,
                "iva_id"=>3, 
                "marca_id"=>1,//CANDY
                
            ],
            [
                "nombre"=>"Samsung WW90T554DAW/S3",
                "descripcion"=>"Lavadora carga frontal - Samsung WW90T554DAW/S3, 9 kg, 1400 rpm, 22 programas, AddWash™, Blanco",
                "precio"=>499,
                "imagen"=>"/storage/img/fee_786_587_png.webp",
                "subcategoria_id"=>3,
                "iva_id"=>3, 
                "marca_id"=>1,//SAMSUNG
                
            ],
            [
                "nombre"=>"LG GBB62PZGGN",
                "descripcion"=>"Frigorífico combi - LG GBB62PZGGN, 384 l, No Frost, 203 cm, Inox",
                "precio"=>749,
                "imagen"=>"/storage/img/frigorifico_png.webp",
                "subcategoria_id"=>1,
                "iva_id"=>3, 
                "marca_id"=>1,//SAMSUNG
            ],
            [
                "nombre"=>"Candy CHICS 5182WN",
                "descripcion"=>"Frigorífico combi - Candy CHICS 5182WN, 262l, Cíclico, 180cm, LED, Cierre puerta suave, Blanco",
                "precio"=>409,
                "imagen"=>"/storage/img/frigorifico3.webp",
                "subcategoria_id"=>1,
                "iva_id"=>3, 
                "marca_id"=>1,//CANDY
            ],
            [
                "nombre"=>"Svan SVF143C",
                "descripcion"=>"Frigorífico 2 puertas - SVAN Frigorífico 2 Puertas Svan SVF143C Blanco. Cíclico. Bajo nivel sonoro. Apertura tipo Uñero. A+/F, Cíclico, Blanco",
                "precio"=>258,
                "imagen"=>"/storage/img/freegorifico4.webp",
                "subcategoria_id"=>1,
                "iva_id"=>3, 
                "marca_id"=>1,//SVAN
            ],
            [
                "nombre"=>"Candy CMDDS 5142WN",
                "descripcion"=>"Frigorífico dos puertas - Candy CMDDS 5142WN, 204l, Cíclico, 143cm, Puertas reversibles, LED, Blanco",
                "precio"=>311,
                "imagen"=>"/storage/img/frigorifixo4.webp",
                "subcategoria_id"=>1,
                "iva_id"=>3, 
                "marca_id"=>1,//SVAN
            ],
            [
                "nombre"=>"Indesit TIHA 17 V",
                "descripcion"=>"Frigorífico dos puertas - Indesit TIHA 17 V, 300 L, Low Frost, 172 cm, Blanco",
                "precio"=>459,
                "imagen"=>"/storage/img/frigorifico6.webp",
                "subcategoria_id"=>1,
                "iva_id"=>3, 
                "marca_id"=>1,//Indesit
            ],

        ];
        DB::table('productos')->insert($data);
    }
}
