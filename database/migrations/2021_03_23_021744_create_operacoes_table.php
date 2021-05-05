<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operacoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('valorOperacoes');
            $table->enum('tipoOperacoes', ['E', 'S']);
            $table->date('dataOperacoes');
            $table->text('descricaoOperacoes', 50)->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('financeiro_id');
            $table->foreign('financeiro_id')->references('id')->on('financeiros')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operacoes');
    }
}
