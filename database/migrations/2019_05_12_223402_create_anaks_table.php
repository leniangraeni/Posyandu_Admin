<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anaks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ibu_id')->unsigned();
            $table->string('nama');
            $table->string('nik');
            $table->string('no_akta_kelahiran');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('gol_darah');
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
        Schema::dropIfExists('anaks');
    }
}
