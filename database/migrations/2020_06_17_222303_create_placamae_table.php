<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacamaeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placamae', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marca');
            $table->string('modelo');
            $table->string('descricao');
            $table->string('chipset');
            $table->timestamps();
        });

        DB::table('placamae')->insert(
            array(
                'marca' => 'Gigabyte',
                'modelo' => 'B450M DS3H',
                'descricao' => 'Placa-Mãe Gigabyte B450M DS3H, AMD AM4, mATX, DDR4',
                'chipset' => 'AMD B450'
            )
        );

        DB::table('placamae')->insert(
            array(
                'marca' => 'ASUS',
                'modelo' => 'Prime B450M Gaming/BR',
                'descricao' => 'Placa-Mãe Asus Prime B450M Gaming/BR, AMD AM4, mATX, DDR4',
                'chipset' => 'AMD B450'
            )
        );

        DB::table('placamae')->insert(
            array(
                'marca' => 'ASRock',
                'modelo' => 'A320M-HD',
                'descricao' => 'Placa-Mãe ASRock A320M-HD, AMD AM4, mATX, DDR4',
                'chipset' => 'AMD Promontory A320'
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
        Schema::dropIfExists('placamae');
    }
}
