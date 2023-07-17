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
        VIEW `v_ofertas` AS
        SELECT 
            `v`.`id` AS `id`,
            `v`.`nombre` AS `nombre`,
            `v`.`descripcion` AS `descripcion`,
            `v`.`iva_id` AS `iva_id`,
            `v`.`subcategoria` AS `subcategoria`,
            `v`.`categoria` AS `categoria`,
            `v`.`marca` AS `marca`,
            `v`.`imAGEN` AS `imAGEN`,
            `o`.`descripcion` AS `descripcio_oferta`,
            `o`.`id` AS `id_oferta`
        FROM
            (`v_productos` `v`
            JOIN `ofertas` `o` ON ((`v`.`id` = `o`.`producto_id`)));");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW v_ofertas");
    }
};
