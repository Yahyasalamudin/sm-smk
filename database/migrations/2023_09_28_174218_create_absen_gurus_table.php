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
        Schema::create('absen_guru', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained('guru');
            $table->string('guru_tamu')->nullable();
            $table->string('agensi')->nullable();
            $table->foreignId('jadwal_guru_id')->constrained('jadwal_guru');
            $table->string('ruang');
            $table->text('materi');
            $table->enum('keterangan', ['terlambat', 'tepat_waktu']);
            $table->string('foto_awal');
            $table->string('foto_akhir')->nullable();
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
        Schema::dropIfExists('absen_guru');
    }
};
