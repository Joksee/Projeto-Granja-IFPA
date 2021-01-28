<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('localLotes', 10);
            $table->decimal('valorPagoLotes', 5,2);
            $table->decimal('pesoInicialLotes', 5,2);
            $table->decimal('pesoMedioLotes', 5,2)->nullable();
            $table->date('dataInicialLotes');
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
        Schema::dropIfExists('lotes');
    }
}
