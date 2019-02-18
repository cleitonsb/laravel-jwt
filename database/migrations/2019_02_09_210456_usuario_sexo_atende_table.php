<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioSexoAtendeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rl_usuario_sexo_atende', function (Blueprint $table) {
            $table->unsignedInteger('co_usuario');
            $table->unsignedInteger('co_sexo_atende');
            $table->foreign('co_usuario')->references('co_usuario')->on('tb_usuario')->onDelete('cascade');
            $table->foreign('co_sexo_atende')->references('co_sexo_atende')->on('tb_sexo_atende')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rl_usuario_sexo_atende');
    }
}
