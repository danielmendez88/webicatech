<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyCatalogoSubcategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catalogo_subcategoria', function (Blueprint $table) {
            // modificaciones
            $table->string('ruta_archivo', 250)->nullable();
            $table->string('titulo_documento', 150)->nullable();
            $table->date('fecha_modificacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('catalogo_subcategoria', function (Blueprint $table) {
            //
        });
    }
}
