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
            $table->boolean('cartao')->default(true);
            $table->decimal('altura', 5, 2);
            $table->integer('horario')->default(1);
            $table->boolean('viagem')->default(true);
            $table->boolean('local')->default(true);
            $table->integer('atende')->default(1);
            $table->boolean('anal')->default(true);
            $table->boolean('oralsem')->default(false);
            $table->boolean('beijo')->default(true);
            $table->boolean('acessorios')->default(true);
            $table->text('descricao');
            $table->unsignedInteger('co_etinia');
            $table->foreign('co_usuario')->references('co_usuario')->on('tb_usuario');
            $table->foreign('co_etinia')->references('co_etinia')->on('tb_etinia');
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
        Schema::dropIfExists('tb_anuncio');
    }
}
