<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('especialidad', 250);
            $table->string('curso', 250);
            $table->text('objetivo');
            $table->string('perfilIngreso', 300);
            $table->boolean('solicitudAutorizacion');
            $table->integer('duracion')->nullable();
            $table->date('fechaValidacion');
            $table->unsignedBigInteger('unidadAccionMovil')->nullable();
            $table->foreign('unidadAccionMovil')->references('id')->on('administrativebodies')
                    ->onUpdate('cascade')->onDelete('set null');
            $table->string('modalidad', 50);
            $table->string('clasificacion', 50);
            $table->text('observacion');
            $table->decimal('costo', 8, 2);
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->foreign('categoria_id')->references('id')->on('categoria')
                    ->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('cursos');
    }
}
