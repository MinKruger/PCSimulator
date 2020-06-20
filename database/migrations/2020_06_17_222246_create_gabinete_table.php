<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGabineteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gabinete', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marca');
            $table->string('modelo');
            $table->string('descricao');
            $table->string('tamanhoPlacaMae');
            $table->timestamps();
        });

        DB::table('gabinete')->insert(
            array(
                'marca' => 'Fortrek',
                'modelo' => 'SC501BK',
                'descricao' => 'Gabinete Fortrek ATX, Preto - SC501BK',
                'tamanhoPlacaMae' => 'ATX / Micro-ATX'
            )
        );

        DB::table('gabinete')->insert(
            array(
                'marca' => 'Bluecase',
                'modelo' => 'BG2523GCASE',
                'descricao' => 'Gabinete Bluecase BG-2523 com Fonte 250W, USB 3.0, Preto - BG2523GCASE',
                'tamanhoPlacaMae' => 'Micro ATX'
            )
        );

        DB::table('gabinete')->insert(
            array(
                'marca' => 'Corsair',
                'modelo' => 'CC-9011166-WW',
                'descricao' => 'Gabinete Gamer Corsair Carbide Series Spec Delta RGB, Mid-Tower, 3 Fans, Vidro Temperado, Preto - CC-9011166-WW',
                'tamanhoPlacaMae' => '12cm'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gabinete');
    }
}
