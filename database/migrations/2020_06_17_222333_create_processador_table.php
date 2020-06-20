<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processador', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marca');
            $table->string('modelo');
            $table->string('descricao');
            $table->string('nucleos');
            $table->string('frequencia');
            $table->timestamps();
        });

        DB::table('processador')->insert(
            array(
                'marca' => 'AMD',
                'modelo' => 'YD1600BBAFBOX',
                'descricao' => 'Processador AMD Ryzen 5 1600, Cache 19MB, 3.2GHz (3.6GHz Max Turbo), AM4 - YD1600BBAFBOX',
                'nucleos' => '6 core',
                'frequencia' => '3.2GHz'
            )
        );

        DB::table('processador')->insert(
            array(
                'marca' => 'Intel',
                'modelo' => 'BX80684I59400F',
                'descricao' => 'Processador Intel Core i5-9400F Coffee Lake, Cache 9MB, 2.9GHz (4.1GHz Max Turbo), LGA 1151, Sem Vídeo - BX80684I59400F',
                'nucleos' => '6x',
                'frequencia' => '2,90 GHz'
            )
        );

        DB::table('processador')->insert(
            array(
                'marca' => 'AMD',
                'modelo' => 'YD3400C5FHBOX',
                'descricao' => 'Processador AMD Ryzen 5 3400G, Cache 4MB, 3.7GHz (4.2GHz Max Turbo), AM4 - YD3400C5FHBOX',
                'nucleos' => '4',
                'frequencia' => '3.7GHz'
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
        Schema::dropIfExists('processador');
    }
}
