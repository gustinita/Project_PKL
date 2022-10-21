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
        Schema::create('biodatadsn', function (Blueprint $table) {
            $table->id();
            $table->string('namadepan');
            $table->string('namabelakang');
            $table->string('email');
            $table->string('jabatan');
            $table->date('tanggallahir');
            $table->string('nidn');
            $table->string('nip');
            $table->string('gelardepan')->nullable();
            $table->string('gelarbelakang');
            $table->string('jabatanfungsional')->nullable();
            $table->string('golongan')->nullable();
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
        Schema::dropIfExists('biodatadsns');
    }
};
