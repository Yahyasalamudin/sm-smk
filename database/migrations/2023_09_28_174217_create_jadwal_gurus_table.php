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
        Schema::create('jadwal_guru', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hari_id')->constrained('hari');
            $table->foreignId('kelas_id')->constrained('kelas');
            $table->foreignId('mapel_id')->constrained('mapel');
            $table->foreignId('guru_id')->constrained('guru');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->foreignId('tukar_jadwal_id')->nullable();
            $table->integer('status_permintaan')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_guru');
    }
};
