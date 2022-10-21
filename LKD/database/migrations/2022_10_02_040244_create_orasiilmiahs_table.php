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
        Schema::create('orasiilmiahs', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_kegiatan');
            $table->string('judul_makalah');
            $table->string('nama_temu_ilmiah');
            $table->string('penyelenggara');
            $table->date('tanggal_pelaksanaan');
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
        Schema::dropIfExists('orasiilmiahs');
    }
};
