<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rom', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marca');
            $table->string('modelo');
            $table->string('descricao');
            $table->string('frequencia');
            $table->string('armazenamento');
            $table->timestamps();
        });

        DB::table('rom')->insert(
            array(
                'marca' => 'Seagate',
                'modelo' => 'ST1000DX001',
                'descricao' => 'SSHD Seagate SATA 3,5´ Híbrido (8GB SSD) 1TB 7200RPM 64MB Cache Sata 6Gb/s - ST1000DX001',
                'frequencia' => '6Gb/s 7200RPM',
                'armazenamento' => '1TB 8GB SSD'
            )
        );

        DB::table('rom')->insert(
            array(
                'marca' => 'WD',
                'modelo' => 'WD10EZEX',
                'descricao' => 'HD WD Blue, 1TB, 3.5´, SATA - WD10EZEX',
                'frequencia' => '6 Gb/s 7200 rpm',
                'armazenamento' => '1TB'
            )
        );

        DB::table('rom')->insert(
            array(
                'marca' => 'Kingston',
                'modelo' => 'SA400S37/240G',
                'descricao' => 'SSD Kingston A400, 240GB, SATA, Leitura 500MB/s, Gravação 350MB/s - SA400S37/240G',
                'frequencia' => 'Leitura 500MB/s, Gravação 350MB/s',
                'armazenamento' => '240GB'
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
        Schema::dropIfExists('rom');
    }
}
