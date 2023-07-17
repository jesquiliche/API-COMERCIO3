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
        DB::statement("CREATE OR REPLACE VIEW v_proveedores AS SELECT pr.*,pob.nombre as poblacion,pro.nombre as provincia 
        FROM comercio.proveedores pr INNER JOIN poblaciones pob ON pr.cod_postal=pob.codigo
        INNER JOIN provincias pro ON pro.codigo=pob.provincia_cod;");
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('v_proveedores');
    }
};
