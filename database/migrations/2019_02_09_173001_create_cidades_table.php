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
            $table->string('ibge', 10)->nullable()->default(null);
            $table->unsignedInteger('co_estado');
            $table->foreign('co_estado')->references('co_estado')->on('tb_estado');
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
        Schema::dropIfExists('tb_cidade');
    }
}
