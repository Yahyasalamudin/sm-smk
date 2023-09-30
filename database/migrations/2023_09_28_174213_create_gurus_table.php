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
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->string('id_card', 10);
            $table->string('nip', 30)->nullable();
            $table->string('nama_guru', 50);
            $table->date('tmk', 50);
            $table->enum('jk', ['L', 'P']);
            $table->string('telp', 15)->nullable();
            $table->string('tmp_lahir', 50)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('foto');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('mapel_guru', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained('guru');
            $table->foreignId('mapel_id')->constrained('mapel');
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
        Schema::dropIfExists('mapel_guru');
        Schema::dropIfExists('guru');
    }
};
