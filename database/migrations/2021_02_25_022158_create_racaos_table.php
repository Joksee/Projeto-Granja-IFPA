<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('racaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomeRacao');
            $table->decimal('quantidadeRacao', 5,2);
            $table->text('descricaoRacao', 300)->nullable();
            $table->date('dataInicialRacao');
            $table->date('dataFinalRacao')->nullable();
            

            $table->unsignedBigInteger('lote_id');
            $table->foreign('lote_id')->references('id')->on('lotes')->onDelete('cascade'); 

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
        Schema::dropIfExists('racaos');
    }
}
