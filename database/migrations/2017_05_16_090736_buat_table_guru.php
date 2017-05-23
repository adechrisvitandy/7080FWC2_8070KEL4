<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableGuru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',50);
            $table->string('nip',18);
            $table->text('alamat');
            $table->string('gelar');
            $table->string('status');
            $table->string('jabatan');
            $table->integer('pengguna_id',false,true);
            $table->integer('pengguna_id')->references('id')->on('pengguna')->onDelete('cascade');
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
        Schema::drop('guru');
    }
}
