<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolas', function (Blueprint $table) {
            $table->id();
            $table->string('nomeEscola');
            $table->string('numEscola')->nullable();
            $table->string('num_contribuinte_fiscal')->nullable();
            $table->string('provincia');
            $table->string('municipio');
            $table->string('localizacao');
            $table->string('numZip')->nullable();
            $table->string('tipoConstrucao');
            $table->string('formaJuridica');
            $table->string('directorDaEscola');
            $table->string('subDirector')->nullable();
            $table->string('subDirectorPedagogico')->nullable();
            $table->string('secretario');
            $table->string('contacto');
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escolas');
    }
}
