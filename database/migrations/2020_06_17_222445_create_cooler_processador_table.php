<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoolerProcessadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooler_processador', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cooler_id');
            $table->unsignedBigInteger('processador_id');
            $table->timestamps();

            $table->foreign('cooler_id')->references('id')->on('cooler')->onDelete('cascade');
            $table->foreign('processador_id')->references('id')->on('processador')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cooler_processador');
    }
}
