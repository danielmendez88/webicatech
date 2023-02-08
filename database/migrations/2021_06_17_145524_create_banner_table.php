<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 200)->nullable();
            $table->boolean('activo')->nullable()->default(true);
            $table->string('path', 250)->nullable();
            $table->char('tipo_archivo', 5)->nullable();
            $table->string('slug', 150)->nullable();
            $table->unsignedBigInteger('id_catbanner');
            $table->timestamps();
            $table->foreign('id_catbanner')->references('id')->on('catalogo_banner')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banner');
    }
}
