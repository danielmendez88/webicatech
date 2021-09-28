<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteRowApartadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apartados', function (Blueprint $table) {
            //
            $table->dropForeign('apartados_cat_id_foreign');
            $table->dropColumn('cat_id');
            $table->bigInteger('sub_apartado_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apartados', function (Blueprint $table) {
            //
        });
    }
}
