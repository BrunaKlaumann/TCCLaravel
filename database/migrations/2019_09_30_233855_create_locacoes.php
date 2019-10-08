<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locacoes', function (Blueprint $table) {
            $table->foreign('id_produto')->references('id_produto')->on('produtos');
            $table->int('id_funcionario')->references('id_funcionario')->on('funcionarios'); 
            $table->string('cod_barras')->references('cod_barras')->on('produtos');  
            $table->timestamp('data_hora');        
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
        Schema::dropIfExists('locacoes');
    }
}
