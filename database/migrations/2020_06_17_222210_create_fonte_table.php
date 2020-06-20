<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFonteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fonte', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marca');
            $table->string('modelo');
            $table->string('descricao');
            $table->string('certificacao')->nullable();
            $table->timestamps();
        });

        DB::table('fonte')->insert(
            array(
                'marca' => 'Corsair',
                'modelo' => 'CP-9020170',
                'descricao' => 'Fonte Corsair 450W 80 Plus White VS450 - CP-9020170-BR',
                'certificacao' => 'White'
            )
        );

        DB::table('fonte')->insert(
            array(
                'marca' => 'EVGA',
                'modelo' => '100-W1-0600-KO',
                'descricao' => 'Fonte EVGA 600W 80 Plus White - 100-W1-0600-K',
                'certificacao' => 'White'
            )
        );

        DB::table('fonte')->insert(
            array(
                'marca' => 'OnePower',
                'modelo' => 'MP600W3-I',
                'descricao' => 'Fonte One Power 600W - MP600W3-I',
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
        Schema::dropIfExists('fonte');
    }
}
