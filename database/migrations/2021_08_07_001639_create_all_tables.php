<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastros', function (Blueprint $table) {
            $table->id();
            $table->integer('id_indicador')->length(10)->unsigned();
            $table->integer('indicados')->length(10)->unsigned();
            $table->string('nome_cliente', 255);
            $table->string('nome_negocio', 255);
            $table->string('seguimento', 55)->nullable();
            $table->integer('tipo_cliente', 1);
            $table->string('email', 255);
            $table->string('link_indicacao', 550);
            $table->string('estado', 150);
            $table->string('telefone', 55);
            $table->timestamps();
        });

        Shema::create('metas', function (Blueprint $table){
            $table->id();
            $table->integer('qt_indicados')->length(10)->unsigned();
            $table->string('tipo_bonus', 150);
            $table->integer('valor_bonus')->unsigned();
            $table->text('descricao_bonus');
            $table->dateTime('valido_ate');
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
        Schema::dropIfExistis('metas');
    }
}
