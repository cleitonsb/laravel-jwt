<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioIdiomaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rl_usuario_idioma', function (Blueprint $table) {
            $table->unsignedInteger('co_usuario');
            $table->unsignedInteger('co_idioma');
            $table->foreign('co_usuario')->references('co_usuario')->on('tb_usuario')->onDelete('cascade');
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
        Schema::dropIfExists('rl_usuario_idioma');
    }
}
