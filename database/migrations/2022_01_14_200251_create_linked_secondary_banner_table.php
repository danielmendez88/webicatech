<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkedSecondaryBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_secundario_vinculado', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150)->nullable();
            $table->string('path', 250)->nullable();
            $table->bigInteger('id_banner')->nullable();
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
        Schema::dropIfExists('banner_secundario_vinculado');
    }
}
