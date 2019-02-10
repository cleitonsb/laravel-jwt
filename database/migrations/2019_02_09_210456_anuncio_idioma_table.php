<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnuncioIdiomaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rl_anuncio_idioma', function (Blueprint $table) {
            $table->unsignedInteger('co_anuncio');
            $table->unsignedInteger('co_idioma');
            $table->foreign('co_anuncio')->references('co_anuncio')->on('tb_anuncio')->onDelete('cascade');
            $table->foreign('co_idioma')->references('co_idioma')->on('tb_idioma')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rl_anuncio_idioma');
    }
}
