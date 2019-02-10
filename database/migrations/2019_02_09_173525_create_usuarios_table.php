<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_usuario', function (Blueprint $table) {
            $table->increments('co_usuario');
            $table->string('nome', 60);
            $table->integer('co_perfil');
            $table->string('sexo', 1);
            $table->boolean('situacao');
            $table->string('email', 60);
            $table->string('senha', 45);
            $table->unsignedInteger('co_bairro');
            $table->foreign('co_bairro')->references('co_bairro')->on('tb_bairro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_usuario');
    }
}
