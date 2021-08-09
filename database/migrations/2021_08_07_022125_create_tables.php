<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_indicador');
            $table->integer('indicados')->default(0);
            $table->string('nome_cliente', 255);
            $table->string('nome_negocio', 255)->default(0);
            $table->integer('segmento')->default(0);
            $table->integer('tipo_cliente');
            $table->string('email', 255);
            $table->string('estado', 150)->default('');
            $table->string('telefone', 55)->default('');
            $table->timestamps();
        });

        Schema::create('metas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('qt_indicados')->default(0);
            $table->string('tipo_bonus', 150);
            $table->integer('valor_bonus')->default(0);
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
        Schema::dropIfExists('cadastros');
        Schema::dropIfExists('metas');
    }
}