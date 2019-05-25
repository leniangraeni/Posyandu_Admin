<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPemeriksaanIbusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pemeriksaan_ibus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ibu_id')->unsigned();
            $table->integer('berat_badan')->unsigned();
            $table->integer('tinggi_badan')->unsigned();
            $table->string('tensi');
            $table->float('lila');
            $table->date('tanggal_pemeriksaan');
            $table->timestamps();

            $table->foreign('ibu_id')->references('id')->on('ibus')->onDelete('CASCADE'); 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pemeriksaan_ibus');
    }
}
