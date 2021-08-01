<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyAndDeleteForeingCatalogoSubcategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catalogo_subcategoria', function (Blueprint $table) {
            //
            $table->dropForeign('catalogo_subcategoria_cat_categoria_id_foreign');
            $table->dropColumn('cat_categoria_id');
            $table->unsignedBigInteger('apartados_id')->nullable();
            $table->foreign('apartados_id')->references('id')->on('apartados');
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
