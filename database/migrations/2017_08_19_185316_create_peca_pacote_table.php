<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePecaPacoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pacote_peca', function (Blueprint $table) {
            $table->integer('peca_id')->unsigned();
            $table->integer('pacote_id')->unsigned();
            $table->primary(['peca_id','pacote_id']);
            
            $table->foreign('peca_id')->references('id')->on('pecas');
            $table->foreign('pacote_id')->references('id')->on('pacotes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        //
       Schema::dropIfExists('pacote_peca');
    }
}
