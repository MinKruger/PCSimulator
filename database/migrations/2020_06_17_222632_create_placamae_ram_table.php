<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacamaeRamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placamae_ram', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('placamae_id');
            $table->unsignedBigInteger('ram_id');
            $table->timestamps();

            $table->foreign('placamae_id')->references('id')->on('placamae')->onDelete('cascade');
            $table->foreign('ram_id')->references('id')->on('ram')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('placamae_ram');
    }
}
