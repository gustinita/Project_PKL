<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengujianmhs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mhs');
            $table->integer('npm');
            $table->string('judul_pengujian');
            $table->string('jenis_pengujian');
            $table->string('program_studi');
            $table->date('tanggal_pengujian');
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
        Schema::dropIfExists('pengujianmhs');
    }
};
