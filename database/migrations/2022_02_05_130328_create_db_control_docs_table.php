<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbControlDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_control_docs', function (Blueprint $table) {
            $table->id();
            $table->string('nomeDoc');
            $table->string('dataSaida');
            $table->string('ano');
            $table->string('beneficiario');
            $table->string('funcionario');
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
        Schema::dropIfExists('db_control_docs');
    }
}
