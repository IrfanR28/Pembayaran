<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nisn', 20);
            $table->char('nis', 18);
            $table->string('nama', 35);
            $table->bigInteger('id_kelas')->unsigned();
            $table->foreign('id_kelas')->references('id')->on('kelas');
            $table->text('alamat');
            $table->string('nomor_telp');
            $table->bigInteger('id_spp')->unsigned();
            $table->foreign('id_spp')->references('id')->on('spp');
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
        Schema::dropIfExists('siswa');
    }
}
