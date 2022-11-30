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
        Schema::create('kegiatan_piket', function (Blueprint $table) {
            $table->char('kode_kegiatan', 5);
            $table->char('kode_kelas', 5);
            $table->string('kode_ruangan', 10);
            $table->char('kode_jadwal', 3);
            $table->date('tanggal');
            $table->integer('jumlah_siswa');
            $table->string('foto_sebelum_piket', 255);
            $table->string('video_sebelum_piket', 255);
            $table->string('foto_sesudah_piket', 255);
            $table->string('video_sesudah_piket', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kegiatan_piket');
    }
};
