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
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained('guru');
            $table->string('semester');
            $table->string('tingkat_kelas');
            $table->enum('jenis_rombel', ['reguler', 'mapel_pilihan']);
            $table->string('mapel');
            $table->text('konten');
            $table->text('tujuan_pembelajaran');
            $table->text('materi');
            $table->enum('jenis_penilaian', ['submatif', 'formatif'])->default('formatif');
            $table->timestamps();
        });

        Schema::create('nilai_siswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nilai_id')->constrained('nilai');
            $table->foreignId('siswa_id')->constrained('siswa');
            $table->integer('nilai')->nullable();
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
        Schema::dropIfExists('nilai_siswa');
        Schema::dropIfExists('nilai');
    }
};
