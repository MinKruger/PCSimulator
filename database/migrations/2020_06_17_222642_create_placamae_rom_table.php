<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacamaeRomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placamae_rom', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('placamae_id');
            $table->unsignedBigInteger('rom_id');
            $table->timestamps();

            $table->foreign('placamae_id')->references('id')->on('placamae')->onDelete('cascade');
            $table->foreign('rom_id')->references('id')->on('rom')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('placamae_rom');
    }
}
