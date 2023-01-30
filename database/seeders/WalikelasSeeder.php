<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WalikelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('level_user')->insert([
            'kode_level' => 's02',
            'nama_level' => 'guru',
            'keterangan' => 'walas kita nich',
        ]);

        DB::table('akun')->insert([
            'username' => 'sap',
            'kode_level' => 's02',
            'email' => 'satriaadeputra@gmail.com',
            'password' => 'satria123',
        ]);

        DB::table('angkatan')->insert([
            'kode_angkatan' => '23',
            'tahun_masuk' => '2020',
            'tahun_keluar' => '2023',
        ]);

        DB::table('jurusan')->insert([
            'kode_jurusan' => 'rpl',
            'nama_jurusan' => 'Rekayasa',
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
