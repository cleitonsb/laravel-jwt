<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnunciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_anuncio', function (Blueprint $table) {
            $table->increments('co_anuncio');
            $table->unsignedInteger('co_usuario');
            $table->integer('idade');
            $table->decimal('peso', 5, 2);
            $table->boolean('cartao');
            $table->decimal('altura', 5, 2);
            $table->integer('horario');
            $table->boolean('viagem');
            $table->boolean('local');
            $table->integer('atende');
            $table->boolean('anal');
            $table->boolean('oralsem');
            $table->boolean('beijo');
            $table->boolean('acessorios');
            $table->text('descricao');
            $table->boolean('situacao');
            $table->unsignedInteger('co_etinia');
            $table->unsignedInteger('co_cabelo');
            $table->unsignedInteger('co_olhos');
            $table->foreign('co_usuario')->references('co_usuario')->on('tb_usuario');
            $table->foreign('co_etinia')->references('co_etinia')->on('tb_etinia');
            $table->foreign('co_cabelo')->references('co_cabelo')->on('tb_cabelo');
            $table->foreign('co_olhos')->references('co_olhos')->on('tb_olhos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_anuncio');
    }
}
