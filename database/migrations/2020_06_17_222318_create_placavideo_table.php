<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacavideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placavideo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marca');
            $table->string('modelo');
            $table->string('descricao');
            $table->string('tamanho');
            $table->string('memoria');
            $table->string('frequencia');
            $table->timestamps();
        });

        DB::table('placavideo')->insert(
            array(
                'marca' => 'ASUS',
                'modelo' => 'AREZ-DUAL-RX580-O8G',
                'descricao' => 'Placa de Vídeo Asus Arez Dual AMD Radeon RX 580 OC Edition, 8GB, GDDR5 - AREZ-DUAL-RX580-O8G',
                'tamanho' => '24.2 x 12.89 x 3.8 cm',
                'memoria' => '8GB',
                'frequencia' => '1380 MHz'
            )
        );

        DB::table('placavideo')->insert(
            array(
                'marca' => 'Gigabyte',
                'modelo' => 'GV-N2060OC-6GD',
                'descricao' => 'Placa de Vídeo Gigabyte NVIDIA GeForce RTX 2060 OC, 6GB, GDDR6, REV 2.0 - GV-N2060OC-6GD',
                'tamanho' => '225,65 x 122,02 x 40,5 mm',
                'memoria' => '6 GB',
                'frequencia' => '1755 MHz'
            )
        );

        DB::table('placavideo')->insert(
            array(
                'marca' => 'AsRock',
                'modelo' => 'D Radeon RX570 8G OC',
                'descricao' => 'Placa de Video Asrock Phantom Gaming D Radeon RX570 8G OC, GDDR5',
                'tamanho' => '236,2 x 127,5 x 41,91 mm',
                'memoria' => '8 GB',
                'frequencia' => '7000 MHz'
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
        Schema::dropIfExists('placavideo');
    }
}
