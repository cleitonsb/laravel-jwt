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
            $table->enum('sexo', ['M', 'F']);
            $table->string('email', 60);
            $table->string('senha');
            $table->unsignedInteger('co_bairro');
            $table->foreign('co_bairro')->references('co_bairro')->on('tb_bairro');
            $table->softDeletes();
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
