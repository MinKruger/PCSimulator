<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ram', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marca');
            $table->string('modelo');
            $table->string('descricao');
            $table->string('frequencia');
            $table->string('armazenamento');
            $table->timestamps();
        });

        DB::table('ram')->insert(
            array(
                'marca' => 'XPG',
                'modelo' => 'AX4U300038G16-SB41',
                'descricao' => 'Memória Adata XPG Spectrix D41 TUF, RGB, 8GB, 3000MHz, DDR4, CL16 - AX4U300038G16-SB41',
                'frequencia' => '3000 MHz',
                'armazenamento' => '8 GB'
            )
        );

        DB::table('ram')->insert(
            array(
                'marca' => 'HyperX',
                'modelo' => 'HX426C16FB3/8',
                'descricao' => 'Memória HyperX Fury, 8GB, 2666MHz, DDR4, CL16, Preto - HX426C16FB3/8',
                'frequencia' => '2666MHz',
                'armazenamento' => '8 GB'
            )
        );

        DB::table('ram')->insert(
            array(
                'marca' => 'Crucial',
                'modelo' => 'BL2K8G26C16U4B',
                'descricao' => 'Memória Crucial Ballistix Sport LT, 16 GB (2X8),2666MHz, DDR4, CL16, Preta - BL2K8G26C16U4B',
                'frequencia' => '2666MHZ',
                'armazenamento' => '16GB (2x8)'
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
        Schema::dropIfExists('ram');
    }
}
