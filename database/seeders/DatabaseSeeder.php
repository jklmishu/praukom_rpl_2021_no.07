<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('jurusan')->insert([
            'kode_jurusan' => 'rpl',
            'nama_jurusan' => 'Rekayasa Perangkat Lunak',
        ]);

        DB::table('kelas')->insert([
            'kode_kelas' => 'e2',
            'kode_angkatan' => '23',
            'kode_jurusan' => 'rpl',
            'nama_kelas' => 'a',
            'tingkatan' => '12',
        ]);

        DB::table('walikelas')->insert([
            'kode_walas' => 'W001',
            'username' => 'sap',
            'kode_kelas' => 'e2',
            'nama_guru' => 'Satria Ade Putra',
        ]);
    }
}
