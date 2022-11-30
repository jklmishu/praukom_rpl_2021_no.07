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
        Schema::create('walikelas', function (Blueprint $table) {
            $table->char('kode_walas', 5);
            $table->string('username', 20);
            $table->char('kode_kelas', 5);
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
        
        Schema::dropIfExists('walikelas');
    }
};
