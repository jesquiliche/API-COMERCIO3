<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        DB::statement("CREATE OR REPLACE
        VIEW `v_productos` AS
        SELECT 
            `p`.`id` AS `id`,
            `p`.`nombre` AS `nombre`,
            `p`.`descripcion` AS `descripcion`,
            `p`.`iva_id` AS `iva_id`,
            `p`.`precio` AS `precio`,
            `s`.`nombre` AS `subcategoria`,
            `c`.`nombre` AS `categoria`,
            `m`.`nombre` AS `marca`,
            `p`.`imagen` AS `imagen`
        FROM
            (((`productos` `p`
            LEFT JOIN `subcategorias` `s` ON ((`p`.`subcategoria_id` = `s`.`id`)))
            JOIN `categorias` `c` ON ((`c`.`id` = `s`.`categoria_id`)))
            JOIN `marcas` `m` ON ((`m`.`id` = `p`.`marca_id`))) ORDER BY CATEGORIA,SUBCATEGORIA;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW v_productos;');
    }
};
