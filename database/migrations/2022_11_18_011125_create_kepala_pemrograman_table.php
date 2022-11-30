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
        Schema::create('kepala_pemrograman', function (Blueprint $table) {
            $table->char('nip_kaprog', 11);
            $table->string('username', 20);
            $table->char('kode_jurusan', 4);
            $table->string('nama_guru', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kepala_pemrograman');
    }
};
