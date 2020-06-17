<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacamaeGabineteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placamae_gabinete', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('placamae_id');
            $table->unsignedBigInteger('gabinete_id');
            $table->timestamps();

            $table->foreign('placamae_id')->references('id')->on('placamae')->onDelete('cascade');
            $table->foreign('gabinete_id')->references('id')->on('gabinete')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('placamae_gabinete');
    }
}
