<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFonteGabineteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fonte_gabinete', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('fonte_id');
            $table->unsignedBigInteger('gabinete_id');
            $table->timestamps();

            $table->foreign('fonte_id')->references('id')->on('fonte')->onDelete('cascade');
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
        Schema::dropIfExists('fonte_gabinete');
    }
}
