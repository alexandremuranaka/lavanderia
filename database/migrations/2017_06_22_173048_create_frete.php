<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fretes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->boolean('ativo');
            $table->integer('prazo_entrega');
            $table->timestamps();
        });

        Schema::create('frete_rotas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->boolean('ativo');
            $table->string('dias',7);
            $table->string('periodos',2);
            $table->integer('frete_id')->unsigned();            
            $table->integer('loja_regiao_id')->unsigned();
            $table->decimal('valor_de',10,2)->nullable();
            $table->decimal('valor_por',10,2);
            $table->timestamps();

            $table->foreign('loja_regiao_id')->references('id')->on('loja_regioes');
            $table->foreign('frete_id')->references('id')->on('fretes');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('fretes');
        Schema::dropIfExists('frete_rotas');
        
    }
}
