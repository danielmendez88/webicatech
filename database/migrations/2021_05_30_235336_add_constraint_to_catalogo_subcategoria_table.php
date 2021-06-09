<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConstraintToCatalogoSubcategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catalogo_subcategoria', function (Blueprint $table) {
            // agregamos el constraint
            $table->foreign('cat_categoria_id')->references('id')->on('catalogo_categoria')->onDelete('cascade');
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
