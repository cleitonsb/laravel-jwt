<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBairrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_bairro', function (Blueprint $table) {
            $table->increments('co_bairro');
            $table->string('nome', 60);
            $table->boolean('situacao');
            $table->unsignedInteger('co_cidade');
            $table->foreign('co_cidade')->references('co_cidade')->on('tb_cidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_bairro');
    }
}
