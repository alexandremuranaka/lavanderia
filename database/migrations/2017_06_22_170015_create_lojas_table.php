<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLojasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lojas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cnpj',14)->nullable();
            $table->text('params')->nullable();
            $table->boolean('ativo');
            $table->timestamps();
        });

        Schema::create('loja_regioes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loja_id')->unsigned();
            $table->string('nome');
            $table->string('mapa_url')->nullable();
            $table->foreign('loja_id')->references('id')->on('lojas');
            $table->timestamps();
        });

        Schema::create('loja_regiao_bairros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loja_regiao_id')->unsigned();
            $table->string('nome');
            $table->foreign('loja_regiao_id')->references('id')->on('loja_regioes');
            $table->timestamps();
        });

        Schema::create('cep_blacklist', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('cep',8)->unique();
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
        Schema::dropIfExists('lojas');
        Schema::dropIfExists('loja_regioes');
        Schema::dropIfExists('loja_regiao_bairros');
        Schema::dropIfExists('cep_blacklist');
    }
}
