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
        Schema::create('siswa', function (Blueprint $table) {
            $table->char('nis_siswa', 9);
            $table->string('username', 20);
            $table->string('kode_kelas', 5);
            $table->string('nama_siswa', 30);
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('foto_siswa', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
