<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableWali extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('wali', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',50);
            $table->string('noHP',18);
            $table->text('alamat');
            $table->integer('pengguna_id',false,true);
            $table->foreign('pengguna_id')->references('id')->on('pengguna')->onDelete('cascade');
            $table->integer('jadwal_pelajaran_id',false,true);
            $table->foreign('jadwal_pelajaran_id')->references('id')->on('jadwal_pelajaran')->onDelete('cascade');
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::drop('wali');*/
    }
}
