<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacamaeProcessadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placamae_processador', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('placamae_id');
            $table->unsignedBigInteger('processador_id');
            $table->timestamps();

            $table->foreign('placamae_id')->references('id')->on('placamae')->onDelete('cascade');
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
        Schema::dropIfExists('placamae_processador');
    }
}
