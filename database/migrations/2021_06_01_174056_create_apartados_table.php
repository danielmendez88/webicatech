<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartados', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 150);
            $table->boolean('activo');
            $table->string('descripcion', 250);
            $table->unsignedBigInteger('cat_id');
            $table->timestamps();
            $table->foreign('cat_id')->references('id')->on('catalogo_categoria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartados');
    }
}
