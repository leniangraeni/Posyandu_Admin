<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPemeriksaanAnaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pemeriksaan_anaks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anak_id')->unsigned();
            $table->integer('berat_badan')->unsigned();
            $table->integer('tinggi_badan')->unsigned();
            $table->string('imunisasi');
            $table->timestamps();

            $table->foreign('anak_id')->references('id')->on('anaks')->onDelete('CASCADE');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pemeriksaan_anaks');
    }
}
