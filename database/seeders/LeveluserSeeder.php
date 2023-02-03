<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeveluserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('level_user')->insert([
            'kode_level' => 'g01',
            'nama_level' => 'guru',
            'keterangan' => 'walikelas 12 rpl',
        ]);
    }
}
