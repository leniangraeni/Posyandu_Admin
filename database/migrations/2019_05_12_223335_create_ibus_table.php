<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIbusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('no_kk')->unsigned();
            $table->integer('nik')->unsigned();
            $table->string('alamat');
            $table->integer('no_telp')->unsigned();
            $table->string('nama_suami');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->integer('no_jkn')->unsigned();
            $table->string('gol_darah');
            $table->string('status_kematian');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ibus');
    }
}
