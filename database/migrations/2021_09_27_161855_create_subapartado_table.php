<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubapartadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_apartado', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 250)->nullable();
            $table->text('descripcion')->nullable();
            $table->boolean('activo')->nullable()->default(true);
            $table->bigInteger('cat_id')->unsigned();
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
        Schema::dropIfExists('sub_apartado');
    }
}
