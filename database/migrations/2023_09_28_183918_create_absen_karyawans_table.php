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
        Schema::create('absen_karyawan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('jadwal_karyawan_id')->constrained('jadwal_karyawan');
            $table->string('keterangan');
            $table->string('foto_awal');
            $table->string('foto_akhir');
            $table->enum('status', ['dikonfirmasi', 'ditolak', 'proses'])->default('proses');
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
        Schema::dropIfExists('absen_karyawan');
    }
};
