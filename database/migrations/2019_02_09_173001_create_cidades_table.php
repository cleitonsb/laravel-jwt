<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cidade', function (Blueprint $table) {
            $table->increments('co_cidade');
            $table->string('nome', 60);
            $table->string('ibge', 10);
            $table->boolean('situacao');
            $table->unsignedInteger('co_estado');
            $table->foreign('co_estado')->references('co_estado')->on('tb_estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_cidade');
    }
}
