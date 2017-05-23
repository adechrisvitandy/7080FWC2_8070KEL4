<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableJadwalPelajaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_pelajaran', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('siswa_id')->unsigned();
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
            $table->integer('kelas_id')->unsigned();
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');
            $table->integer('nilai_id')->unsigned();
            $table->foreign('nilai_id')->references('id')->on('nilai')->onDelete('cascade');
            $table->integer('guru_mengajar_id')->unsigned();
            $table->foreign('guru_mengajar_id')->references('id')->on('guru_mengajar')->onDelete('cascade');
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
        Schema::drop('jadwal_pelajaran');
    }
}
