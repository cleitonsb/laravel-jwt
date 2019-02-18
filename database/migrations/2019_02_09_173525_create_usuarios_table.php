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
            $table->integer('co_perfil')->default(2);
            $table->enum('sexo', ['M', 'F', 'T'])->default('F');
            $table->string('email', 60);
            $table->string('password');
            $table->string('fone', 20);
            $table->unsignedInteger('co_bairro');
            $table->foreign('co_bairro')->references('co_bairro')->on('tb_bairro');
            $table->date('dt_nasc');
            $table->decimal('peso', 5, 2);
            $table->boolean('cartao')->default(true);
            $table->decimal('altura', 5, 2);
            $table->integer('horario')->default(1);
            $table->boolean('viagem')->default(true);
            $table->boolean('local')->default(true);
            $table->enum('atende', ['M', 'F', 'A'])->default('M');
            $table->boolean('anal')->default(true);
            $table->boolean('oralsem')->default(false);
            $table->boolean('beijo')->default(true);
            $table->boolean('acessorios')->default(true);
            $table->text('descricao')->nullable();
            $table->unsignedInteger('co_etinia');
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
        Schema::dropIfExists('tb_usuario');
    }
}
