<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre")->unique();
            $table->text("descripcion");
            $table->float("precio");
            $table->text("imagen")->nullable();
            $table->unsignedBigInteger("subcategoria_id");
            $table->foreign("subcategoria_id"
            )->references("id")->on("subcategorias");
            $table->unsignedBigInteger("iva_id");
            $table->foreign("iva_id")->references("id")->on("ivas");
            $table->unsignedBigInteger("marca_id");
            $table->foreign("marca_id")->references("id")->on("marcas");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
