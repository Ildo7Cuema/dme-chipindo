<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('escola_id');
            $table->string('nome');
            $table->string('nomeDoPai');
            $table->string('nomeDaMae');
            $table->string('numBi');
            $table->string('dataNascimento');
            $table->string('dataEmissao');
            $table->string('provincia');
            $table->string('municipio');
            $table->string('genero');
            $table->string('contacto');
            $table->string('email');
            $table->string('funcao');
            $table->string('grauAcademico');
            $table->string('areaFormacao');
            $table->string('institutoDeFormacao');
            $table->string('numAgente');
            $table->string('inicioFuncoes');
            $table->timestamps();


            $table->foreign('categoria_id')->references('id')->on(categorias::class)->onDelete('cascade');
            $table->foreign('escola_id')->references('id')->on(escolas::class)->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
