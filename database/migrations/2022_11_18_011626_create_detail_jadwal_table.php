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
        Schema::create('detail_jadwal', function (Blueprint $table) {
            $table->char('kode_kegiatan', 5);
            $table->char('kode_pekerjaan', 4);
            $table->string('nis_siswa', 20);
            $table->text('hasil_pekerjaan');
            $table->text('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_jadwal');
    }
};
