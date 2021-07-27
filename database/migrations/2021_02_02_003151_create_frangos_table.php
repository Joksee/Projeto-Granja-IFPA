<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrangosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frangos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('corFrangos', ['Branco', 'Preto', 'Vermelho'])->nullable();
            $table->enum('subespecieFrangos', ['Peito_Duplo', 'Caipirao'])->nullable();
            $table->enum('sexoFrangos', ['M', 'F']);
            $table->enum('estadoFrangos', ['V', 'M', 'P', "G"]); //Estados: Vivo, Morto, Pronto, Granjado
            $table->decimal('valorFrangos', 5, 2)->nullable();
            $table->integer('quantFrangos');
    //escrever uma chave estrangeira

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
        Schema::dropIfExists('frangos');
    }
}
