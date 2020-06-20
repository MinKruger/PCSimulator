<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoolerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooler', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marca');
            $table->string('modelo');
            $table->string('descricao');
            $table->string('tamanho');
            $table->timestamps();
        });

        DB::table('cooler')->insert(
            array(
                'marca' => 'Corsair',
                'modelo' => 'CW-9060028-WW',
                'descricao' => 'WaterCooler Corsair Hydro Series High Performance H45 - CW-9060028-WW',
                'tamanho' => '120mm'
            )
        );

        DB::table('cooler')->insert(
            array(
                'marca' => 'Vinik',
                'modelo' => '29565',
                'descricao' => 'Cooler FAN Vinik VX Gaming V.Ring, 120mm, LED Azul - 29565',
                'tamanho' => '120mm'
            )
        );

        DB::table('cooler')->insert(
            array(
                'marca' => 'C3ECH',
                'modelo' => 'F9-L150RGB',
                'descricao' => 'Cooler Fan C3Tech Storm 12cm c/ LED Multicolorido - F9-L150RGB',
                'tamanho' => '12cm'
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
        Schema::dropIfExists('cooler');
    }
}
